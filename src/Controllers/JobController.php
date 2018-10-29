<?php 

namespace Skynet\Controllers;

use Skynet\Models\Job;

class JobController extends BaseController
{
	public function index($request)
	{
		$jobs = Job::all();
		return $this->renderHTML('jobs/index.twig', [
			'jobs' => $jobs
		]);
	}

	public function create($request)
	{
		return $this->renderHTML('jobs/add.twig');
	}

	public function store($request)
	{
		$postData = $request->getParsedBody();
		$job = new Job();
		$job->title = $postData['title'];
		$job->description = $postData['description'];
		$job->save();
		return $this->redirect('/jobs');
	}
}

?>