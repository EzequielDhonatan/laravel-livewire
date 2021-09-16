<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{

    Tweet\ShowTweet

}; //

Route::get( 'tweet', ShowTweet::class )->name( 'tweet' )->middleware( 'auth' ); ## TWEET

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
