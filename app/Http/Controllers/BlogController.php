<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(Request $request){
        $categories = Category::all();
        return view('home')->with(['category' => $categories]);
    }
}
