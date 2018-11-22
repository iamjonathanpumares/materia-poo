<?php 

namespace Skynet\Controllers\Auth;

use Skynet\Controllers\BaseController;
use Skynet\Validators\AuthLogin;

class AuthController extends BaseController
{
	public function login($request)
	{
		return $this->renderHTML('auth/login.twig');
	}

	public function authenticate($request)
	{
		// Se obtienen los datos del formulario
		$postData = $request->getParsedBody();

		// Validamos los datos del formulario
		$authValidator = new AuthLogin($postData);
		if ($authValidator->isValid())
		{
			$_SESSION['user'] = $postData['email'];
			$_SESSION['messages'] = [];
			// Si los datos son válidos se redirreciona al dashboard
			return $this->redirect('/admin/website/configuration');
		}

		return $this->renderHTML('auth/login.twig', [
			'errors' => $authValidator->getErrors()
		]);
	}

	public function logout($request)
	{
		session_destroy();
		$_SESSION = [];
		return $this->redirect('/auth/login');
	}
}

?>