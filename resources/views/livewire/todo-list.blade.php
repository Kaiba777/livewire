<div>
    <input type="text" wire:model="todo">

    <h2 x-text="$wire.get('todo').length"></h2>

    <button x-on:click="$wire.set('todo', '', false)">Effacer</button>

    <button type="button" wire:click='$refresh'>Actualiser</button>

    <button type="button" wire:click='delete' wire:confirm='Voulez-vous vraiment supprimer ce post?'>
        Supprimer le post
    </button>
    <br>
    <input wire:model="query" wire:keydown.enter="searchPosts">
</div>
