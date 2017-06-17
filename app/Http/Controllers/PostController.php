<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function kaydet()
    {
        $ileti = new Post();
        $ileti->baslik = Request('baslik');
        $ileti->icerik = Request('icerik');
        $ileti->save();
        return redirect('/emre/blog/');
    }
    public function ekle()
    {
        return view('emre.blog.ekle');
    }
    public function goster()
    {
        $iletiler = Post::all();

        return view('emre.blog.index', compact('iletiler'));
    }
}
