<div>

    <h1>Atualizar foto do perfil</h1>

    <form method="POST" wire:submit.prevent="storagePhoto">

        <input type="file" id="photo" name="photo" wire:model="photo">
        @error( 'photo' ) {{ $message }} @enderror

        <button type="submit">Upload</button>

    </form> <!-- -->

</div> <!-- -->
