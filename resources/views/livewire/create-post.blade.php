<div>
    <h1>Titre: "{{ $title }}"</h1>

    <h1>Les données contenue dans la Base de données</h1>
    @foreach ($posts as $post)
        <div wire:key="{{ $post->id }}">{{ $post->title }}</div>
    @endforeach

    <h1>Formulaire</h1>
    <form wire:submit="save">
        <label for="title">Titre:</label>
        <input type="text" id="title" wire:model.live="title">

        <button type="submit">Enregistrer</button>

        <span wire:loading>En cours...</span>
    </form>
</div>
