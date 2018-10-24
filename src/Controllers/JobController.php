<?php 

namespace Skynet\Controllers;

class JobController extends BaseController
{
	public function create($request)
	{		
		echo $this->renderHTML('jobs/add.twig', [
			'title' => 'Hola',
			'description' => 'Aprendiendo MVC con PHP',
			'jobs' => [
				[
					'title' => 'PHP',
					'description' => 'Full Snack'
				],
				[
					'title' => 'Django',
					'description' => 'Full Snack'
				],
			]
		]);
	}

	public function store($request)
	{
		echo '<pre>';
		var_dump($request->getParsedBody());
		echo '</pre>';
	}
}

?>