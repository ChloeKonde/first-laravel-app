<?php


namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{

    /**
     * @var PostService
     */
    private $postService;

    public function __construct()
    {
        $this->postService = app(PostService::class);
    }

    public function create() {
        return view('posts.createpost');
    }

    public function store(StorePostRequest $request) {
        $this->postService->store($request->all());
    }

    public function destroy($id) {
        $this->postService->destroy($id);
        return redirect()->back();
    }

    public function show() {
        return view('posts.showposts');
    }

    public function edit($id) {
        $post = $this->postService->edit($id);
        return view('posts.editpost', ['post' => $post]);
    }

    public function update(UpdatePostRequest $request, $id) {
        $post = Post::find($id);
        $this->authorize('update', $post);
        $this->postService->update($request, $id);
        return redirect()->route('showposts');
    }

    public function showComments($id) {
        return view('comments.showcomments', ['comments' => DB::table('comments')
                                                                     ->where('post_id', '=', $id)
                                                                     ->get()]);
    }
}
