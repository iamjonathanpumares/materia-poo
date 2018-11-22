<?php 

namespace Skynet\Controllers;

use Skynet\Models\Service;
use Skynet\Models\Product;

class HomeController extends BaseController
{
	public function index($request)
	{
		$services = Service::all();
		$products = Product::all();
		return $this->renderHTML('home/index.twig', [
			'services' => $services,
			'products' => $products
		]);
	}

	public function productShow($request)
	{
		$id = $request->getAttribute('id');
		$product = Product::find($id);
		return $this->renderHTML('products/show.twig', [
			'product' => $product
		]);
	}
}

?>