<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get(){
        $posts = Post::with('tags')->get();
        return response()->json([
            'posts' => $posts
        ]);
    }

    public function store(StorePostRequest $request){
        //creamos el post
        $post = new Post;
        $post->po_title = $request->title;
        $post->po_description = $request->description;
        $post->save();

        //recibimos los tags
        $tags = $request->tags;
        $tagIds = [];
        foreach ($tags as $value) {
            $registerTag = Tag::firstOrCreate(['tg_description' => $value]);
            $tagIds[] = $registerTag->tg_tag_id;
        }
        //asignamos los tags al post
        $post->tags()->attach($tagIds);
        return response()->json(['message' => 'Post creado exitosamente']);
    }
}
