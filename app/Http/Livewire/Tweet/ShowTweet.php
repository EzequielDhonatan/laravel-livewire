<?php

namespace App\Http\Livewire\Tweet;

use Livewire\Component;

use App\Models\Tweet\Tweet;

class ShowTweet extends Component
{
    public $message = 'apenas um test';

    public function render()
    {
        $tweets = Tweet::with( 'user' )->latest()->paginate();

        return view( 'livewire.tweet.show-tweet', compact( 'tweets' ) );
    }

} // ShowTweet
