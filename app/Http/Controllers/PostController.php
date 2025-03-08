<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }


    public function index()
    {
        $posts = Post::get(); #Obtiene todos los posts
        
        return view('posts.index', ['posts' => $posts]); #Devuelve la vista blog con los posts
    }

    public function show(Post $post) #Muestra un post en particular pero le añade funcionalidad de error 404 si no existe
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(SavePostRequest $request)
    {
        // $validated = request()->validate([
        //     'title' => ['required', 'min:5'],
        //     'body' => ['required', 'min:10']
        // ]); #Validación de datos

        // $post = new Post();
        // $post -> title = $request -> input('title');
        // $post -> body = $request -> input('body');
        // $post -> save();
        // session() -> flash('success', 'Post was created');
        // return to_route('posts.index');
        # Otra forma de hacerlo

        Post::create($request->validated());

        return to_route('posts.index') -> with('success', 'Post was created');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post){

        // $validated = request()->validate([
        //     'title' => ['required', 'min:5'],
        //     'body' => ['required', 'min:10']
        // ]); #Validación de datos

        // $post -> title = $request -> input('title');
        // $post -> body = $request -> input('body');
        // $post -> save();
        $post -> update($request -> validated());
        
        return to_route('posts.index')-> with('success', 'Post was updated');
    }

    public function destroy(Post $post)
    {
        $post -> delete();
        return to_route('posts.index')-> with('success', 'Post was deleted');
    }
}

