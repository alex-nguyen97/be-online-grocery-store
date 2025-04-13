<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

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
        $products = Product::orderBy('name', 'asc')->get();

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

    /**
     * Get products by category or subcategory.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getProducts(Request $request)
    {
        // Get the category and sub_category from the query string
        $categoryId = $request->query('category');
        $subCategoryId = $request->query('sub_category');
        $searchName = $request->query('search');
        // If neither category nor sub_category is provided, return an error
        if (!$categoryId && !$subCategoryId) {
            $products = Product::get();
        }

        // Fetch products by category if category is provided
        if ($categoryId) {
            $subcategories = Category::find($categoryId)->subcategories;
            if ($subcategories->isEmpty()) {
                return response()->json(['message' => 'No subcategories found for this category'], 404);
            }
            $products = Product::whereIn('sub_category_id', $subcategories->pluck('sub_category_id'))->orderBy('name', 'asc')->get();
        }

        // Fetch products by sub_category if sub_category is provided
        else if ($subCategoryId) {
            $products = Product::where('sub_category_id', $subCategoryId)->orderBy('name', 'asc')->get();
        }

        if ($searchName) {
            $products = Product::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($searchName) . '%'])->orderBy('name', 'asc')->get();
        }

        // Return response if no products are found
        if ($products->isEmpty()) {
            return response()->json(['message' => 'No products found'], 404);
        }

        return response()->json($products, 200);
    }
}
