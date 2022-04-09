<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'post', 'post_excerpt', 'slug', 'user_id', 'featuredImage', 'metaDescription', 'views'];

    public function categories(){
        return $this->BelongsToMany(Category::class, 'blog_categories');
    }
    public function tags(){
        return $this->BelongsToMany(Tag::class, 'blog_tags');
    }
}
