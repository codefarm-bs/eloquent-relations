<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $user = \App\Models\User::first() ?? \App\Models\User::factory()->create();

//    $user->roles()->sync([1 => [
//        'description' => 'some notes here',
//        'assigner_id' => \App\Models\User::factory()->create()->id
//    ]]);

    return $user->roles->first()->mypivot->assigner;
});


