<div>

    Show Tweets

    <p>{{ $message }}</p>

    <form method="POST" wire:submit.prevent="store">

        <input type="text" id="message" name="message" wire:model="message">

        <button type="submit">
            Criar Tweet
        </button>

    </form> <!-- -->

    <hr>

    @foreach ( $tweets as $tweet )

        {{ $tweet->user->name }} <br>
        {{ $tweet->content }}

    @endforeach

</div> <!-- -->
