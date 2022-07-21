<?php

namespace App\Http\Livewire;

use App\Models\PatientQueue;
use Livewire\Component;

class DashboardDoctor extends Component
{
    public function cancel($id){
        $p=PatientQueue::find($id);
            $p->update(['status'=>3]);
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Pasien '.$p->patient->name. ' telah dibatalkan',
            'icon' => 'success'
        ]);
    }
    public function render()
    {
        return view('livewire.dashboard-doctor');
    }
}
