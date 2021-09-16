<?php

namespace App\Http\Livewire\Tweet;

use Livewire\Component;

class ShowTweet extends Component
{
    public $message = 'apenas um test';

    public function render()
    {
        return view( 'livewire.tweet.show-tweet' );
    }

} // ShowTweet
