<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all categories
        $categories = Category::with('subcategories')->get();

        // Return categories as a JSON response
        return response()->json($categories);
    }
}
