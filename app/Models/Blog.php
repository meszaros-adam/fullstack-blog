<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use App\Models\Comment;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'post', 'post_excerpt', 'slug', 'user_id', 'featuredImage', 'metaDescription', 'views'];

    public function categories(){
        return $this->belongsToMany(Category::class, 'blog_categories');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'blog_tags');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id')->select('id', 'fullName','profilePic');
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
