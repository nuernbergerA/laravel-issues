<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Something extends Component
{
    public $category_id;

    protected $rules = [
        'category_id' => 'required|integer',
    ];

    public function updated($field)
    {
        $this->validateOnly($field, $this->rules);
    }

    public function render()
    {
        return view('livewire.something');
    }
}
