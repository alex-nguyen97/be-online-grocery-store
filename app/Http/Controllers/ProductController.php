<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of products along with their category and subcategory.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve products with their associated subcategories and categories
        $products = Product::get();

        // Return products as a JSON response
        return response()->json($products);
    }

    /**
     * Show the details of a single product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve a specific product along with its subcategory and category
        $product = Product::get()->findOrFail($id);

        return response()->json($product);
    }
}
