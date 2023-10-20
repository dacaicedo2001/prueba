<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller {

    public function getAllProducts() {
        return Response()->json(Product::all());
    }

    public function getAProductById(int $id) {
        return Response()->json(Product::find($id));
    }

    public function updateProduct(Request $request, string $id) {

        // No funciona aun
        $product = Product::find($id);
        $product->nombre = $request->get('nombre');
        $product->precio = $request->get('precio');
        $product->cantidad = $request->get('cantidad');
        $product->save();
        return Response()->json($request);
    }

    public function insertProduct(Request $request) {
        $product = new Product();
        $product->nombre = $request->get('nombre');
        $product->precio = $request->get('precio');
        $product->cantidad = $request->get('cantidad');
        $product->save();
        return Response()->json($request);
    }

    public function deleteProduct(int $id) {
        $product = Product::find($id);
        return Response()->json($product);
    }
}
