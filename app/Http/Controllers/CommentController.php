<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Photo;
use App\Models\Video;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::get();
        foreach ($comments as $comment) {
            dump($comment->commentable);
        }
    }

    public function videoComments($id)
    {
        $video = Video::findOrFail($id);
        dump($video->comments()->first()->text);
    }
}
