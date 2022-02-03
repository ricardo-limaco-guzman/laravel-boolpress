<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        // $categories = Category::orderBy('name')->get();
        // return response()->json($categories);

        $categories = Category::all();
        return $categories;
    }
}
