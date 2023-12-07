<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class PostController extends Controller
{
    public function getIndex(Store $session)
    {
        $post = new Post();
        $posts = $post ->getPosts($session);
        return view('blog.index', ['posts' => $posts]);
    }

    public function getAdminIndex(Store $session)
    {
        $post = new Post();
        $posts = $post ->getPosts($session);
        return view('admin.index', ['posts' => $posts]);
    }

    public function getPost(Store $session, $id)
    {
    $post = new Post();
    $post = $post->getPost($session, $id);
    return view('blog.index', ['post' => $post]);
    }


    public function getAdminCreate()
    {
        return view('admin.create');
    }

    public function getAdminEdit(Store $session, $id)
    {
    $post = new Post();
    $post = $post->getPosts($session, $id);
    return view('admin.edit', ['post' => $post, 'postId' => $id]);
    }


    public function postAdminCreate (Store $session, Request $request)
    {
        $this -> validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        $post= new Post();
        $post->addPost($session, $request ->input('title') , $request ->input('content'));
        return redirect ()
            ->route ('admin.index')
            ->with ('info', 'Post creado, el titulo es ' . $request->input('title'));
    }

    public function postAdminUpdate (Store $session, Request $request)
    {
        $this -> validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        $post= new Post();
        $post->addPost($session,$request ->input('id') , $request ->input('title') , $request ->input('content'));
        return redirect ()
            ->route ('admin.index')
            ->with ('info', ' Post editado, nuevo titulo ' . $request->input('title'));
    }
}
