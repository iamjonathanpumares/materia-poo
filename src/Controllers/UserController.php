<?php 

namespace Skynet\Controllers;

class UserController extends BaseController
{
	public function index($request)
	{
		$usuarios = [
			[
				'nombre' => 'Jonathan Pumares',
				'edad' => 27,
				'pais' => 'México'
			],
			[
				'nombre' => 'Isaac',
				'edad' => 27,
				'pais' => 'México'
			]
		];

		return $this->jsonResponse($usuarios);
	}
}

?>