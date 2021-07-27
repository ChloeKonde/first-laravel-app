<?php


namespace App\Services;


use App\Models\Comment;

class CommentService
{
    public function store($data) {
        $comment = Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $data['post_id'],
            'title' => $data['title'],
        ]);
    }
}
