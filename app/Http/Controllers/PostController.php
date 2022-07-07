<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if(request('category'))
        {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        
        if(request('author'))
        {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['category', 'search', 'author']))->paginate(7)->withQueryString()
            // "posts" => Post::latest()->filter(request(['category', 'search']))->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }

    public function create()
    {
        $model = new Post;
        return view('create', [
            "title" => "Posts",
            "active" => "posts",
            compact('model')
        ]);
    }

    public function store(Request $request)
    {
        $model = new Post;
        $model->title = $request->title;
        $model->excerpt = $request->excerpt;
        $model->body = $request->body;
        $model->save();

        return redirect('posts');
    }

    public function edit($id)
    {
        $model = Post::find($id);
        return view('edit', [
            "title" => "Posts",
            "model" => $model
        ]);
    }

    public function update(Request $request, $id)
    {
        $model = Post::find($id);
        $model->title = $request->title;
        $model->excerpt = $request->excerpt;
        $model->body = $request->body;
        $model->save();

        return redirect('posts');
    }

    public function destroy($id)
    {
        $model = Post::find($id);
        $model->delete();
        return redirect('posts');
    }
}
