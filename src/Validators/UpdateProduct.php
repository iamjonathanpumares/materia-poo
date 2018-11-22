<?php 

namespace Skynet\Validators;

use Respect\Validation\Validator as v;
use Skynet\Models\Product;

class UpdateProduct extends BaseValidator
{
	protected $model = Product::class;

	public function __construct(array $data, array $files)
	{
		$this->validator = v::key('title', v::stringType()->notEmpty())
		                  ->key('description', v::stringType()->notEmpty());
		$this->validatorFiles = v::key('image', v::image()->notEmpty());
		parent::__construct($data, $files);
		// $this->files();
	}

	// private function files()
	// {
	// 	// Se obtienen los campos del $this->data
	// 	$image = $this->files['image'];

	// 	// Se validan los campos
	// 	if ($image->getError() == UPLOAD_ERR_OK)
	// 	{
	// 		// Subir imagen al servidor
	// 		$fileName = $image->getClientFilename();
	// 		$path = "uploads/$fileName";
	// 		$image->moveTo($path);
	// 	}
	// 	else if ($image->getError() == UPLOAD_ERR_NO_FILE)
	// 	{
	// 		array_push($this->errors, 'La imagen es obligatoria');
	// 	}
	// }
}

?>