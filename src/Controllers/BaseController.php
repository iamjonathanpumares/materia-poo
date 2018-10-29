<?php 

namespace Skynet\Controllers;

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\RedirectResponse;

class BaseController
{
	protected $templateEngine;

	public function __construct()
	{
		$loader = new \Twig_Loader_Filesystem('../views');
		$this->templateEngine = new \Twig_Environment($loader, array(
			'debug' => true,
		    'cache' => false,
		));
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