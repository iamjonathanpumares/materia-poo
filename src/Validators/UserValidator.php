<?php 

namespace Skynet\Validators;

use Respect\Validation\Validator as v;

class JobValidator extends BaseValidator
{

	public function __construct(array $data)
	{
		$this->validator = v::key('email', v::stringType()->notEmpty())
		                  ->key('password', v::stringType()->notEmpty());
		parent::__construct($data);
	}
}

?>