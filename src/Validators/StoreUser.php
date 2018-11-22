<?php 

namespace Skynet\Validators;

use Respect\Validation\Validator as v;

class StoreUser extends BaseValidator
{

	public function __construct(array $data)
	{
		$this->validator = v::key('email', v::email()->notEmpty())
		                  ->key('password', v::stringType()->notEmpty())
		                  ->key('confirm_password', v::stringType()->notEmpty());
		parent::__construct($data);
		$this->password();
	}

	private function password()
	{
		// Se obtienen los campos del $this->data
		$password = $this->data['password'];
		$confirm_password = $this->data['confirm_password'];

		// Se validan los campos
		if (!empty($password) && !empty($confirm_password))
		{
			if ($password !== $confirm_password)
			{
				array_push($this->errors, 'Las contraseñas no coinciden');
			}
		}
	}
}

?>