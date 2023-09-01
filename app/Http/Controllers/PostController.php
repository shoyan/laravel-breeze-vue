<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    // 更新ページ
    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    /**
     * 指定した投稿を更新
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // ポリシーエラーの場合は例外を発生させる
        Gate::authorize('update', $post);

        // $response = Gate::inspect('update', $post);
        // if (! $response->allowed()) {
        //      abort(403);
        // }

        // 投稿を更新…
        $post->title = "更新されている";
        $post->save();
    }
}
