<?php 

namespace Skynet\Controllers\Admin;

use Skynet\Models\User;
use Skynet\Controllers\BaseController;
use Skynet\Validators\StoreUser;

class UserController extends BaseController
{
	public function index($request)
	{
		$users = User::all();
		return $this->renderHTML('admin/users/index.twig', [
			'users' => $users
		]);
	}

	public function create($request)
	{
		return $this->renderHTML('admin/users/create.twig');
	}

	public function store($request)
	{
		// Se obtienen los datos del formulario
		$postData = $request->getParsedBody();

		// Validamos los datos del formulario
		$userValidator = new StoreUser($postData);
		if ($userValidator->isValid())
		{
			// Si los datos son válidos se crea un nuevo usuario
			$user = new User;
			$user->email = $postData['email'];
			$user->password = password_hash($postData['password'], PASSWORD_DEFAULT);
			$user->save();

			return $this->redirect('/admin/users');
		}

		return $this->renderHTML('admin/users/create.twig', [
			'errors' => $userValidator->getErrors()
		]);
	}
}

?>