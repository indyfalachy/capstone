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
        $this->optionPatient = eloquent_to_options(\App\Models\Patient::get(), 'id', 'name');
        $this->optionUnit = eloquent_to_options(UnitService::get(), 'id', 'title');
        $this->queue = [
            'patient_id' => 1,
            'unit_service_id' => 1,
        ];
    }

    public function create()
    {
//        dd($this->queue);
        $queue=PatientQueue::getQueue($this->queue['unit_service_id']);
        PatientQueue::create([
            'patient_id'=>$this->queue['patient_id'],
            'unit_service_id'=>$this->queue['unit_service_id'],
            'status'=>1,//1 wait //2 done //3 cancel
            'queue'=>$queue
        ]);
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'No antrian ke '.$queue.' pada '. UnitService::find($this->queue['unit_service_id'])->title,
            'icon' => 'success'
        ]);
        $this->emit('redirect', route('admin.dashboard'));
    }

    public function render()
    {
        return view('livewire.form.queue');
    }
}
