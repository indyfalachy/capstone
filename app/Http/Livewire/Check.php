<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Check extends Component
{
    public $something;
    public $data;

    public function mount(){
        $this->something='';
        $this->data=[];
    }
    public function render()
    {
        return view('livewire.check');
    }
}
