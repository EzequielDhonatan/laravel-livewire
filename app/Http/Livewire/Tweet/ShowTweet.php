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
        $tweets = Tweet::with( 'user' )->latest()->paginate();

        return view( 'livewire.tweet.show-tweet', compact( 'tweets' ) );
    }

    public function store()
    {
        $this->validate();

        // Tweet::create([
        //     'user_id'   => auth()->user()->id,
        //     'content'   => $this->content
        // ]); //

        auth()->user()->tweets()->create([
            'content'   => $this->content
        ]);

        $this->content = '';
    }

    public function like( $idTweet )
    {
        $tweet = Tweet::find( $idTweet );

        $tweet->likes()->create([
            'user_id' => auth()->user()->id
        ]);
    }

    public function unlike( Tweet $tweet )
    {
        $tweet->likes()->delete();
    }

} // ShowTweet
