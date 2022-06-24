<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class MedicalInitial extends Component
{
    public $action;
    public $data;
    public $dataId;

    public function mount()
    {
        if ($this->dataId != null) {
            $data = \App\Models\MedicalInitial::find($this->dataId);
            $this->data = [
                'main_complaint'=>$data->main_complaint,
                'medical_history_now'=>$data->medical_history_now,
                'medical_history_past'=>$data->medical_history_past,
                'condition'=>$data->condition,
                'awarnes'=>$data->awarnes,
                'gcs'=>$data->gcs,
                'sick_state'=>$data->sick_state,
                'nutritional_status'=>$data->nutritional_status,
                'blood_pressure'=>$data->blood_pressure,
                'pulse'=>$data->pulse,
                'temperature'=>$data->temperature,
                'weight'=>$data->weight,
                'height'=>$data->height,
                'addition_note'=>$data->addition_note,
                'created_at'=>$data->created_at,
                'updated_at'=>$data->updated_at
            ];
        }
    }

    public function render()
    {
        return view('livewire.form.medical-initial');
    }
}
