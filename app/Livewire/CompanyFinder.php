<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CompanyFinder extends Component
{
    public $companies;
    public $activeCompany;

    public function mount()
    {
        $this->companies = Customer::all();
    }

    public function setActive($id) {
        $this->activeCompany = $this->companies->firstWhere('id', $id);
    }

    public function render()
    {
        return view('livewire.company-finder');
    }
}
