<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
class CommentController extends Controller
{
    public function kaydet(Post $post)
    {
        $post->comments()->create(['icerik'=>request('icerik')]);

        return back();
    }
}
