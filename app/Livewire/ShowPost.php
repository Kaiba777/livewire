<?php

namespace App\Livewire;

use App\Models\Test;
use Livewire\Component;
use Livewire\Attributes\Js;

class ShowPost extends Component
{
    public $query = '';
 
    #[Js] 
    public function resetQuery()
    {
        return <<<'JS'
            $wire.query = '';
        JS;
    }

    public function mount($id)
    {
        $this->post = Test::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.show-post');
    }
}
