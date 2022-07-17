<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    public function blogComments()
    {
        $comments = BlogComment::orderBy('is_approved','asc')->get();
        return view('backend.blog.comments', compact('comments'));
    }

    public function approveComments(Request $request, BlogComment $comment)
    {
        $comment->update(['is_approved' => 1]);

        return redirect()->back()->withToastSuccess('Comment Approved Successfully!!');

    }
}
