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
        // Crear un nuevo post con los datos validados
        Post::create($request->validated());

        // Redirigir con mensaje de éxito indicando que se creó el post
        return to_route('posts.index')->with('success', [
            'message' => 'Post was created',
            'type' => 'created'
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
        // Actualizar el post con los datos validados
        $post->update($request->validated());
        
        // Redirigir con mensaje de éxito indicando que se editó el post
        return to_route('posts.index')->with('success', [
            'message' => 'Post was updated',
            'type' => 'updated'
        ]);
    }

    public function destroy(Post $post)
    {
        // Eliminar el post
        $post->delete();
        
        // Redirigir con mensaje de éxito indicando que se eliminó el post
        return to_route('posts.index')->with('success', [
            'message' => 'Post was deleted',
            'type' => 'deleted'
        ]);
    }
}
