<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request){

        $this->validate($request, [
            'blogId' => 'required',
            'bloguserId'  => 'required',
            'commentTxt'  => 'required',
        ]);

        return Comment::create([
            'comment' => $request->commentTxt,
            'bloguser_id' => $request->bloguserId,
            'blog_id' => $request->blogId,
            'parent_comment_id' => $request->parentCommentId,
        ]);
    }
}
