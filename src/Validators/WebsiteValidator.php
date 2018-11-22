<?php 

namespace Skynet\Validators;

use Respect\Validation\Validator as v;

class WebsiteValidator extends BaseValidator
{

	public function __construct(array $data)
	{
		$this->validator = v::key('site_name', v::stringType()->notEmpty())
						  ->key('title', v::stringType()->notEmpty())
		                  ->key('description', v::stringType()->notEmpty());
		parent::__construct($data);
	}
}

?>