<div>

    Show Tweets

    <p>{{ $message }}</p>

    <input type="text" id="message" name="message" wire:model="message">

    <hr>

    @foreach ( $tweets as $twwet )

        {{ $tweet->user->name }} <br>
        {{ $tweet->content }}

    @endforeach

</div> <!-- -->
