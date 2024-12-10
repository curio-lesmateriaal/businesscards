<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $active = 'dashboard';

    public function show( $type ) {
        $this->active = $type;
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
