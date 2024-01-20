<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todos = [];

    public $todo = '';

    public function mount()
    {
        // Affiche tous les tâches existants dans la Base de données à l'utilisateur
        // $this->todos = Auth::user()->todos;
    }
    public function render()
    {
        return view('livewire.todo-list');
    }
}
