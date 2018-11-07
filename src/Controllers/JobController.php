<?php 

namespace Skynet\Controllers;

use Skynet\Models\Job;
use Skynet\Validators\JobValidator;

class JobController extends BaseController
{
	public function index($request)
	{
		$jobs = Job::all();
		return $this->renderHTML('jobs/index.twig', [
			'jobs' => $jobs
		]);
	}

	public function show($request)
	{
		$id = $request->getAttribute('id');
		echo '<h1>Estamos en el método show()</h1>';
		echo '<pre>';
		var_dump($id);
		echo '</pre>';
	}

	public function create($request)
	{
		return $this->renderHTML('jobs/add.twig');
	}

	public function store($request)
	{
		$errors = [];
		$postData = $request->getParsedBody();

		// Validamos los datos
		$jobValidator = new JobValidator($postData);

		if ($jobValidator->is_valid())
		{
			$job = new Job();
			$job->title = $postData['title'];
			$job->description = $postData['description'];
			$job->save();
			return $this->redirect('/jobs');
		}

		 return $this->renderHTML('jobs/add.twig', [
		 	'errors' => $jobValidator->getErrors()
		 ]);                 

	}

	public function edit($request)
	{
		$id = $request->getAttribute('id');
		$job = Job::where('id', $id)->first();
		return $this->renderHTML('jobs/edit.twig', [
			'job' => $job
		]);
	}

	public function update($request)
	{
		$postData = $request->getParsedBody();
		$id = $request->getAttribute('id');
		$job = Job::where('id', $id)->first();
		$job->title = $postData['title'];
		$job->description = $postData['description'];
		$job->save();
		return $this->redirect('/jobs');
	}

	public function delete($request)
	{
		$id = $request->getAttribute('id');
		$job = Job::find($id);
		return $this->renderHTML('jobs/delete.twig', [
			'job' => $job
		]);
	}

	public function destroy($request)
	{
		$id = $request->getAttribute('id');
		$job = Job::find($id);
		$job->delete();
		return $this->redirect('/jobs');
	}
}

?>