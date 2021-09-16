<?php

namespace App\Http\Livewire\Tweet;

use Livewire\Component;

use App\Models\Tweet\Tweet;
use Livewire\WithPagination;

class ShowTweet extends Component
{
    use WithPagination;

    public $content = 'apenas um test';

    protected $rules = [
        'content' => 'required|min:3|max:255'
    ];

    public function render()
    {
        $tweets = Tweet::with( 'user' )->paginate( 2 );

        return view( 'livewire.tweet.show-tweet', compact( 'tweets' ) );
    }

    public function store()
    {
        $this->validate();

        Tweet::create([
            'user_id'   => 1,
            'content'   => $this->content
        ]); //

        $this->content = '';
    }

} // ShowTweet
