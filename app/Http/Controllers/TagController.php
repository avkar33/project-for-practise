<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::get();
        foreach ($tags as $tag) {
            dump($tag->description);
            dump($tag->photos);
            dump($tag->videos);

        }
    }

    public function addTag($tagId, $id, $type)
    {
        $tag = Tag::find($tagId);
        if ($type == 'video') {
            $entity = Video::find($id);
        } elseif ($type == 'photo') {
            $entity = Photo::find($id);
        }
        $entity->tags()->save($tag);
        dump($entity->tags);
    }

    public function showTags($id, $type)
    {
        if ($type == 'video') {
            $entity = Video::find($id);
        } elseif ($type == 'photo') {
            $entity = Photo::find($id);
        }

        dump($entity->tags);
    }
}
