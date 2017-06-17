<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
    public function kaydet()
    {
        $yorum = new Comment();
        $yorum->icerik = Request('icerik');
        $yorum->save();
        return redirect('/emre/blog/');
        //dd(Request('icerik'));
    }
}
