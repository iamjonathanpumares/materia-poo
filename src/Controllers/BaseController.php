<?php 

namespace Skynet\Controllers;

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\RedirectResponse;

abstract class BaseController
{
	protected $templateEngine;

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
	}

	public function renderHTML($templateName, $data = [])
	{
		return new HtmlResponse($this->templateEngine->render($templateName, $data));
	}

	public function redirect($url)
	{
		return new RedirectResponse($url);
	}
}