<div>

    <h1 class="text-4xl py-6 font-bold h-24">
        Tweets
    </h1>

    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8" method="POST" wire:submit.prevent="create">

        <label class="block text-gray-700 text-sm font-bold mb-4" for="username">
            Tweet
        </label>

        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error( 'content' ) border-red-500 @enderror" id="content" name="content" rows="5" placeholder="O que está pensando?" wire:model="content"></textarea>
        @error( 'content' )
            <p>
                <span class="text-red-500">{{ $message }}</span>
            </p>
        @enderror

        <button type="submit" class="bg-blue-900 text-white p-2 pl-6 pr-6 rounded">
            Criar Tweet
        </button>

    </form>

    @foreach ( $tweets as $tweet )

        <div class="flex m-8 bg-white shadow-md rounded p-4">

            <div class="w-1/8 pl-3 text-center">

                @if ( $tweet->user->photo )
                    <img class="rounded-full h-8 w-8" alt="{{ $tweet->user->name }}" src="{{ url( "storage/{$tweet->user->photo}" ) }}">
                @else
                    <img class="rounded-full h-8 w-8" alt="{{ $tweet->user->name }}" src="{{ url( 'imgs/no-image.png' ) }}">
                @endif

                {{-- $tweet->user->name --}}

            </div> <!-- w-1/8 pl-3 text-center -->

            <div class="w-7/8 pl-3 inline-block align-text-middle">

                {{ $tweet->content }}
                (
                    @if ( $tweet->likes->count() )
                        <a class="text-red-500" href="#" wire:click.prevent="unlike( {{ $tweet->id }} )">
                            Descurtir
                        </a>
                    @else
                        <a class="text-teal-500" href="#" wire:click.prevent="like( {{ $tweet->id }} )">
                            Curtir
                        </a>
                    @endif
                )

            </div> <!-- w-7/8 pl-3 inline-block align-text-middle -->

        </div> <!-- flex m-8 bg-white shadow-md rounded p-4 -->

    @endforeach

    <div class="py-12">
        {{ $tweets->links() }}
    </div>

</div> <!-- -->
