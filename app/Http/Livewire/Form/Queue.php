<?php

namespace App\Http\Livewire\Form;

use App\Models\PatientQueue;
use App\Models\UnitService;
use Livewire\Component;

class Queue extends Component
{
    public $data;
    public $queue;
    public $optionPatient;
    public $optionUnit;

    public function mount()
    {
        $this->optionPatient = eloquent_to_options(\App\Models\Pasien::get(), 'id', 'name');
        $this->optionUnit = eloquent_to_options(UnitService::get(), 'id', 'title');
        $this->queue = [
            'pasien_id' => $this->optionPatient[0]['value'],
            'unit_service_id' => $this->optionUnit[0]['value'],
        ];
    }

    public function create()
    {
        $medical = \App\Models\MedicalInitial::create($this->data);
        PatientQueue::create([
            'pasien_id'=>$this->queue['pasien_id'],
            'unit_service_id'=>$this->queue['unit_service_id'],
            'medical_initial_id'=>$medical->id,
            'status'=>1,//1 wait //2 done //3 cancel
            'queue'=>PatientQueue::getQueue($this->queue['unit_service_id'])
        ]);
    }

    public function render()
    {
        return view('livewire.form.queue');
    }
}
