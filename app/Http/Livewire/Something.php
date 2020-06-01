<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Something extends Component
{
    public $someVariable = true;

    public function log()
    {
        Log::info('hit');
    }

    public function render()
    {
        return view('livewire.something');
    }
}
