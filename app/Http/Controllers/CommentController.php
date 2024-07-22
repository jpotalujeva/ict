<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = $request->input('user_id');
        $post_id = $request->input('post_id');
        $comment = $request->input('comment');

        $data = Comment::create([
            'user_id' => $user_id,
            'post_id' => $post_id,
            'comment' => $comment,
        ]);

        $post = Post::find($post_id);
        $comments = Comment::where('post_id', $post_id)->get();
        $names = $this->getNames($comments);

        if ($data) {
            return view('posts.show')->with([
                'post'=> $post,
                'comments' => $comments,
                'names' => $names

            ]);
        }

        return redirect('/dashboard')->with('status', 'Comment was not added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('/dashboard')->with('status', 'Comment deleted!');
    
    }

    private function getNames($comments)
    {
        $names = [];
        foreach ($comments as $key => $value) {
            $username = User::where('id', $value->user_id)->value('name');
            $names[$value->id] = $username;
        }
        return $names;
    }
}
