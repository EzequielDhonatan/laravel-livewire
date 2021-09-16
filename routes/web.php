<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{

    Tweet\ShowTweet

}; //

Route::get( 'tweet', ShowTweet::class );

Route::get('/', function () {
    return view('welcome');
});
