<?php


namespace App\Http\Controllers;


class PostsController
{
    public function show($post){
    $posts = [
        "first-post"  => 'This is my first post',
        "second-post" => 'This is my second post',
        ];
    if (!array_key_exists($post, $posts)){
        abort(404, 'This Page doesnt exist');
    }
    return view('post',[
        'post' =>$posts[$post]
    ]);
    }
}
