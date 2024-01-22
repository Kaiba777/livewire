<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use App\Models\FormTest;
use Livewire\Attributes\Validate;

class Form extends Component
{
    public PostForm $form;

    public function save ()
    {
        $this->validate();
        FormTest::create(
            $this->form->all()
        );

        return $this->redirect('/form');
    }
    public function render()
    {
        return view('livewire.form');
    }
}
