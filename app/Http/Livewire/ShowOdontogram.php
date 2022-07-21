<?php

namespace App\Http\Livewire;

use App\Models\MedicalRecord;
use Livewire\Component;

class ShowOdontogram extends Component
{
    public $rmId;

    public function render()
    {

//        dd(());
        return view('livewire.show-odontogram');
    }
}
