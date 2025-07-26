<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
         $posts = Post::where('user_id', request()->user()->id) //laravel helper->authenticated_user->authenticated_user_id
                 ->orderBy('created_at', 'desc')
                 ->paginate(10);

    return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        if($post->user_id !== request()->user()->id){
        abort(403);
        }
        return view('posts.show',['post'=> $post]);
    }

    public function edit(Post $post)
    {
        if($post->user_id !== request()->user()->id){
        abort(403);
        }
        return view('posts.edit',['post'=> $post]);
    }

    public function update(Request $request, Post $post)
    {
        if($post->user_id !== request()->user()->id);
        abort(403);
        $data = $request->validate([
            'note' => ['required', 'string']
        ]);

        $post->update($data);

        return to_route('posts.show', $post)->with('message', 'Post was created');
    }

    public function destroy(Post $post)
    {
        //
    }
}
