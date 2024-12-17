<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    public $active = 'contactpersons';


    public function show( $type ) {
        $this->active = $type;
    }

    public function export(){
        dd('test the excel export!');
    }

    public function mount() {

    }

    public function render()
    {
        $customers = Customer::paginate(5);
        return view('livewire.dashboard', [
            'customers' => $customers
        ]);
    }
}
