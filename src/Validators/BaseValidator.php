<?php 

namespace Skynet\Validators;

abstract class BaseValidator
{
	protected $errors = [];
	protected $validator;
	protected $data;

	public function __construct(array $data)
	{
		$this->data = $data;
	}

	public function getErrors()
	{
		return $this->errors;
	}

	public function is_valid()
	{
		try {
			$this->validator->assert($this->data);
			return true;
		} catch (\Exception $e) {
			$this->errors = $e->getMessages();
			return false;
		}
	}
}

?>