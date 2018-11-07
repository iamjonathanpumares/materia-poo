<?php 

namespace Skynet\Validators;

use Respect\Validation\Validator as v;

class JobValidator extends BaseValidator
{

	public function __construct(array $data)
	{
		$this->validator = v::key('title', v::stringType()->notEmpty())
		                  ->key('description', v::stringType()->notEmpty());
		parent::__construct($data);
	}
}

?>