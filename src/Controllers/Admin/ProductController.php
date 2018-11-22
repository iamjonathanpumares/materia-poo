<?php 

namespace Skynet\Controllers\Admin;

use Skynet\Models\Product;
use Skynet\Controllers\BaseController;
use Skynet\Validators\StoreProduct;
use Skynet\Validators\UpdateProduct;

class ProductController extends BaseController
{
	public function index($request)
	{
		$products = Product::all();
		return $this->renderHTML('admin/products/index.twig', [
			'products' => $products
		]);
	}

	public function create($request)
	{
		return $this->renderHTML('admin/products/create.twig');
	}

	public function store($request)
	{
		$postData = $request->getParsedBody();
		$files = $request->getUploadedFiles();
		$errors = [];

		// Validamos los datos
		$productValidator = new StoreProduct($postData, $files);

		if ($productValidator->isValid())
		{
			$fileName = $productValidator->validated['image']->getClientFilename();
			$path = "uploads/$fileName";

			$product = new Product();

			$product->title = $postData['title'];
			$product->description = $postData['description'];
			$product->image = $path;
			$product->save();

			return $this->redirect('/admin/products');
		}

		$errors = array_merge($errors, $productValidator->getErrors());

		return $this->renderHTML('admin/products/create.twig', [
			'errors' => $errors
		]);
	}

	public function edit($request)
	{
		$id = $request->getAttribute('id');
		$product = Product::where('id', $id)->first();
		return $this->renderHTML('admin/products/edit.twig', [
			'product' => $product
		]);
	}

	public function update($request)
	{
		$postData = $request->getParsedBody();
		$files = $request->getUploadedFiles();
		debug($files);
		$productValidator = new UpdateProduct($postData, $files);
		// debug($productValidator->getErrors());
		if ($productValidator->isValid())
		{
			$productValidator->save();
		}
	}

	public function show($request)
	{
		$id = $request->getAttribute('id');
		$product = Product::find($id);
		return $this->renderHTML('products/show.twig', [
			'product' => $product
		]);
	}
}

?>