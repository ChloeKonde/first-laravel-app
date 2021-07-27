<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private $commentService;

    public function __construct()
    {
        $this->commentService = app(CommentService::class);
    }

    public function create($id) {
        return view('comments.createcomment', ['post_id' => $id]);
    }

    public function store(StoreCommentRequest $request) {
        $this->commentService->store($request);
    }
}
