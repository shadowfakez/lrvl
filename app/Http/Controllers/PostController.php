<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Task;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPost(Post $post)
    {
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        return view('posts', compact('posts'));
    }

    public function showTask(Task $task)
    {
        $tasks = Task::orderBy('id', 'desc')->paginate(3);
        return view('tasks', compact('tasks'));
    }
}
