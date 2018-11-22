<?php 

namespace Skynet\Controllers\Admin;

use Skynet\Controllers\BaseController;
use Skynet\Models\Website;
use Skynet\Validators\WebsiteValidator;

class WebsiteController extends BaseController
{
	public function configuration($request)
	{
		$website = Website::first();
		return $this->renderHTML('admin/website/configuration.twig', [
			'website' => $website
		]);
	}

	public function save($request)
	{
		$website = Website::first();

		$postData = $request->getParsedBody();
		$files = $request->getUploadedFiles();
		$background_image = $files['background_image'];
		// debug($background_image->getError());
		$errors = [];

		// Validamos los datos
		$websiteValidator = new WebsiteValidator($postData);

		if ($websiteValidator->isValid())
		{
			if ($background_image->getError() == UPLOAD_ERR_OK)
			{
				// Subir imagen al servidor
				$fileName = $background_image->getClientFilename();
				$path = "uploads/$fileName";
				$background_image->moveTo($path);
			}
			else if ($background_image->getError() == UPLOAD_ERR_NO_FILE)
			{
				if (is_null($website))
				{
					array_push($errors, 'La imagen de fondo es obligatoria');
				}
				else
				{
					$path = $postData['background_image_save'];
				}
				
			}

			if (empty($errors))
			{
				if (is_null($website))
				{
					$website = new Website();
				}

				$website->site_name = $postData['site_name'];
				$website->title = $postData['title'];
				$website->description = $postData['description'];
				$website->background_image = $path;
				$website->save();

				return $this->redirect('/admin/website/configuration');
			}
		}

		$errors = array_merge($errors, $websiteValidator->getErrors());

		return $this->renderHTML('admin/website/configuration.twig', [
			'errors' => $errors
		]);
	}
}

?>