<?php

namespace App\Livewire;

use App\Models\Test;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = "Titre du post";

    public function save() {
        $post = Test::create([
            'title' => $this->title
        ]);

        return redirect()->to('/post')->with("status", "Titre créer!");
    }

    public function mount($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.create-post')->with([
            'posts' => Test::all()
        ]);
    }
}
