<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class MedicalRecord extends Component
{
    public $action;
    public $data;
    public $dataId;

    public function mount()
    {
        if ($this->dataId != null) {
            $data = \App\Models\MedicalRecord::find($this->dataId);
            $this->data = [
                'user_id'=>$data->user_id,
                'pasien_id'=>$data->pasien_id,
                'unit_service_id'=>$data->unit_service_id,
                'file_location'=>$data->file_location,
                'soap'=>$data->soap,
                'action'=>$data->action,
                'type'=>$data->type,
                'refer'=>$data->refer,
                'file_addition'=>$data->file_addition,
                'created_at'=>$data->created_at,
                'updated_at'=>$data->update_at
            ];
        }
    }

    public function render()
    {
        return view('livewire.form.medical-record');
    }
}
