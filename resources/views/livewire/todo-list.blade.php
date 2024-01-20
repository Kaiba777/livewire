<div>
    <input type="text" wire:model="todo">

    <h2 x-text="$wire.get('todo').length"></h2>

    <button x-on:click="$wire.set('todo', '', false)">Effacer</button>
</div>
