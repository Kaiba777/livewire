<?php

namespace App\Livewire;

use App\Models\Test;
use Livewire\Component;

class ShowPost extends Component
{

    public function mount($id)
    {
        $this->post = Test::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.show-post');
    }
}
