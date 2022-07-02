<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class MedicalRecord extends Component
{
    public $action;
    public $data;
    public $dataId;
    public $pasien;

    public function mount()
    {
        $this->data['pasien_id']=0;
        $this->searchPatient(null);
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
    public $optionPatient;
    public function searchPatient(){
        $this->optionPatient = eloquent_to_options(\App\Models\Pasien::search($this->pasien), 'id', 'name');
//        $this->queue = [
//            'pasien_id' => $this->optionPatient[0]['value'],
//            'unit_service_id' => $this->optionUnit[0]['value'],
//        ];
    }

    public function render()
    {

        $this->optionPatient = eloquent_to_options(\App\Models\Pasien::search($this->pasien)->get(), 'id', 'name');
        if ($this->optionPatient!=null){
            $this->data = [
                'pasien_id' => $this->optionPatient[0]['value'],
            ];
        }

        return view('livewire.form.medical-record');
    }
}
