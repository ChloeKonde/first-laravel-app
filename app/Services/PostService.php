<?php


namespace App\Services;


use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;


class PostService
{
    public function store($data) {
        $post = Post::create([
            'name' => $data['name'],
            'user_id' => auth()->id(),
            'description' => $data['description'],
        ]);
    }

    public function destroy($id) {
        Post::destroy($id);
    }

    public function edit($id) {
        return Post::find($id);
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);
        $post->name = $request['name'];
        $post->description = $request['description'];
        $post->save();
    }
}
