<?php

namespace App\Http\Livewire\Tweet;

use Livewire\Component;

use App\Models\Tweet\Tweet;

class ShowTweet extends Component
{
    public $message = 'apenas um test';

    public function render()
    {
        $tweets = Tweet::with( 'user' )->get();

        return view( 'livewire.tweet.show-tweet', compact( 'tweets' ) );
    }

    public function store()
    {
        Tweet::create([
            'user_id'   => 1,
            'content'   => $this->message
        ]); //

        $this->message = '';
    }

} // ShowTweet
