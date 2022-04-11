<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request){
        $categories = Category::select('id', 'categoryName')->get();
        $blogs = Blog::orderBy('id', 'desc')->with(['users', 'categories'])->limit(6)->get(['id','title','post_excerpt', 'slug', 'user_id','featuredImage']);
        return view('home')->with(['category' => $categories, 'blogs' => $blogs, 'categories' => $categories]);
    }
}
