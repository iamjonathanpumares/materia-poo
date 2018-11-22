<?php 

namespace Skynet\Validators;

use Respect\Validation\Validator as v;
use Skynet\Models\User;

class AuthLogin extends BaseValidator
{

	public function __construct(array $data)
	{
		$this->validator = v::key('email', v::email()->notEmpty())
		                  ->key('password', v::stringType()->notEmpty());
		parent::__construct($data);
		$this->login();
	}

	private function login()
	{
		// Se obtienen los campos del $this->data
		$email = $this->data['email'];
		$password = $this->data['password'];

		
		// Se validan los campos
		if (!empty($email) && !empty($password))
		{
			$user = User::where('email', $email)->first();
			if ($user)
			{
				if (!\password_verify($password, $user->password))
				{
					\array_push($this->errors, 'Datos de acceso incorrectos');
				}
			}
			else
			{
				\array_push($this->errors, 'Datos de acceso incorrectos');
			}
		}
	}
}

?>