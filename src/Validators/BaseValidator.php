<?php 

namespace Skynet\Validators;

use Illuminate\Database\Eloquent\Model;

abstract class BaseValidator
{
	protected $errors = [];
	protected $validator;
	protected $validatorFiles;
	protected $data;
	protected $files;
	protected $filesFields = [];
	protected $model;
	public $validated;

	public function __construct(array $data, array $files = [])
	{
		$this->data = $data;
		$this->files = $files;
		$this->assert();
		$this->assertFiles();
	}

	public function getErrors()
	{
		return $this->errors;
	}

	public function isValid()
	{
		if (empty($this->errors))
		{
			foreach ($this->data as $key => $value)
			{
				$this->validated[$key] = $value;
			}
			if ($this->files)
			{
				foreach ($this->files as $key => $value)
				{
					$this->validated[$key] = $value;
				}
			}
			
			return true;
		}
		return false;
	}

	public function save()
	{
		$model::create($this->data);
	}

	protected function assert()
	{
		try {
			$this->validator->assert($this->data);
		} catch (\Exception $e) {
			$this->errors = $e->getMessages();
		}
	}

	protected function assertFiles()
	{
		if (!empty($this->files))
		{
			foreach ($this->files as $file)
			{
				try {
					$this->validatorFiles->assert($file->getClientFilename());
				} catch (\Exception $e) {
					$this->errors = $e->getMessages();
				}
			}
		}
	}
}

?>