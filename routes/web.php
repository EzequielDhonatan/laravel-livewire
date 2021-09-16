<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{

    Tweet\ShowTweet,
    User\Upload\Photo

}; //

Route::get( 'tweet', ShowTweet::class )->name( 'tweet.index' )->middleware( 'auth' ); ## TWEET
Route::get( 'upload', Photo::class )->name( 'upload.photo.user' )->middleware( 'auth' ); ## UPLOAD PHOTO

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
