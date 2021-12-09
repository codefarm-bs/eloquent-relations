<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

//    $user = \App\Models\User::first() ?? \App\Models\User::factory()->create();
    $post = \App\Models\Post::first() ?? \App\Models\Post::factory()->create();
    $topic = \App\Models\Topic::first() ?? \App\Models\Topic::create(['name' => 'programming']);

//    $user->image()->create(['url' => 'somewhere/avatar.jpg']);


    $post->tags()->detach();
    $topic->tags()->detach();

    $post->tags()->attach(\App\Models\Tag::all());
    $topic->tags()->attach(\App\Models\Tag::all());


    return [
        'posts of #laravel' => \App\Models\Tag::find(1)->posts,
        'topics of #laravel' => \App\Models\Tag::find(1)->topics
    ];
});


