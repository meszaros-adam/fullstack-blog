<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request){
        $categories = Category::select('id', 'categoryName')->get();
        $blogs = Blog::orderBy('id', 'desc')->with(['user', 'categories'])->limit(6)->get(['id','title','post_excerpt', 'slug', 'user_id','featuredImage']);
        return view('home')->with(['blogs' => $blogs, 'categories' => $categories]);
    }
    public function blogSingle(Request $request, $slug){
        $blog = Blog::where('slug', $slug)->with(['categories', 'tags', 'user'])->first(['id', 'title', 'user_id', 'featuredImage', 'post', 'created_at']);
        $category_ids = [];
        foreach($blog->categories as $cat){
            array_push($category_ids, $cat->id);
        }        
        $relatedBlogs = Blog::with('user')->where('id', '!=', $blog->id)->whereHas('categories', function($q) use($category_ids){
            $q->whereIn('category_id',  $category_ids);
        })->limit(5)->orderBy('id', 'desc')->get(['id','title','post_excerpt', 'slug', 'user_id','featuredImage']);
        return view('blogsingle')->with(['blog'=> $blog, 'relatedBlogs' => $relatedBlogs]);
    }
    public function compose(View $view){
        $view->with('categories', Category::select('id', 'categoryName')->get());
    }
}
