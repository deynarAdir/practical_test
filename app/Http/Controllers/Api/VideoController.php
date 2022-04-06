<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function get(){
        $videos = Video::with('tags')->get();
        return response()->json([
            'videos' => $videos
        ]);
    }

    public function store(Request $request){
        //creamos el video
        $video = new Video;
        $video->vi_title = $request->title;
        $video->save();

        //recibimos los tags
        $tags = $request->tags;
        $tagIds = [];
        foreach ($tags as $value) {
            $registerTag = Tag::firstOrCreate(['tg_description' => $value]);
            $tagIds[] = $registerTag->tg_tag_id;
        }
        //asignamos los tags al post
        $video->tags()->attach($tagIds);
        return response()->json(['message' => 'Video creado exitosamente']);
    }
}
