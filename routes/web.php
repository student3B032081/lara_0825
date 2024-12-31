<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Comment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    //$post = new Post();
    //$post->title='test title';
    //$post->content = 'test content';
    //$post->save();

    //Post::create([
    //        'title'=>'test title',
    //        'content'=>'test content',
    //
    //    ]);

    // $post = Post::find(1);
    //    echo '標題: ' . $post->title . '<br>';
    //    echo '內容: ' . $post->content . '<br>';
    //    dd($post);

    //$posts = Post::where('id','<','10')->orderBy('id','DESC')->get();
    //    dd($posts);

    //$post = Post::find(1);
    //    $post->update([
    //        'title'=>'update title',
    //        'content'=>'update content'
    //    ]);
    //    return 'updated';


    //    $post->title = 'saved title';
    //    $post->content = 'saved content';
    //    $post->save();
    //    return 'Saved';

    //$lastPost = Post::orderBy('id', 'desc')->first();
    //dd($lastPost);

    //$post = Post::find(6);
    //    echo '標題: '.$post->title.'<br>';
    //    echo '內容: '.$post->content.'<br>';
    //    echo '--------------------------'.'<br>';
    //    $comments = $post->comments()->get();
    //    foreach ($comments as $comment) {
    //        echo '留言: ' . $comment->content . "<br>";
    //        echo '--------------------------' . '<br>';
    //    }

    $comment = Comment::find(2);
    echo $comment->content.'<br>';
    echo '******************'.'<br>';
    $post = $comment->post()->first();
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->content.'<br>';



});
