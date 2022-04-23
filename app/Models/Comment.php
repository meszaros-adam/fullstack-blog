<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bloguser;
use App\Models\Comment;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment', 'bloguser_id', 'blog_id', 'parent_comment_id'];

    public function bloguser(){
        return $this->belongsTo(Bloguser::class);
    }
    public function parent(){
        return $this->belongsTo(Comment::class,'parent_comment_id');
    }

    
}
