<?php 

namespace Skynet\Controllers;

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\RedirectResponse;
use Skynet\Models\Website;

abstract class BaseController
{
	protected $templateEngine;
	protected $generator;

	public function __construct()
	{
		$loader = new \Twig_Loader_Filesystem('../views');
		$this->templateEngine = new \Twig_Environment($loader, array(
			'debug' => getenv('APP_DEBUG'),
		    'cache' => false,
		));

		$function = new \Twig_Function('asset', function ($path) {
		    echo htmlspecialchars(getenv('APP_URL') . '/public/' . $path);
		});
		$this->templateEngine->addFunction($function);

		$function = new \Twig_Function('route', function ($path) {
		    echo htmlspecialchars(getenv('APP_URL') . '/public/' . $path);
		});
		$this->templateEngine->addFunction($function);
	}

	public function setGenerator($generator)
	{
		$this->generator = $generator;
	}

	public function renderHTML($templateName, $data = [])
	{
		$data['website'] = Website::first();
		return new HtmlResponse($this->templateEngine->render($templateName, $data));
	}

	public function redirect($url)
	{
		return new RedirectResponse($url);
	}

	public function route($routeName, $attrs)
	{
		$path = $this->generator->generate($routeName, $attrs);
		$href = htmlspecialchars($path, ENT_QUOTES, 'UTF-8');
		return $this->redirect($href);
	}
}