<div>
    <form wire:submit='save'>
        <label>Titre:</label>
        <x-input-text name='form.title' wire:model.live='form.title' />
        <br>
        <label>Contenu:</label>
        <textarea cols="30" rows="10" wire:model.blur='form.content'></textarea>
        @error('form.content')
            <span>{{ $message }}</span>
        @enderror       

        <button type="submit">Enregistrer</button>
    </form>
</div>
