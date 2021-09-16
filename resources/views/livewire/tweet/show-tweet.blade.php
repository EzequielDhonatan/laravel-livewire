<div>

    Show Tweets

    <p>{{ $content }}</p>

    <form method="POST" wire:submit.prevent="store">

        <input type="text" id="content" name="content" wire:model="content">
        @error( 'content' ) {{ $message }} @enderror

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
