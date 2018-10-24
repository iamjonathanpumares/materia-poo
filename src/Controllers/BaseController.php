<?php 

namespace Skynet\Controllers;

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
		return $this->templateEngine->render($templateName, $data);
	}
}