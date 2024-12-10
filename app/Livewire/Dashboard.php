<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public function show( $type ) {
        dd($type);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
