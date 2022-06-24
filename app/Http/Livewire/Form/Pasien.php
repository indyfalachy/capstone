<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Pasien extends Component
{
    public $action;
    public $data;
    public $dataId;

    public function mount()
    {
        if ($this->dataId != null) {
            $data = \App\Models\Pasien::find($this->dataId);
            $this->data = [
                'name'=>$data->name,
                'nik'=>$data->nik,
                'address'=>$data-a,
                'birth_place'=>$data->birth_place,
                'birth_date'=>$data->birth_date,
                'village'=>$data->village,
                'district'=>$data->district,
                'gender'=>$data->gender,
                'religion'=>$data->religion,
                'job'=>$data->job,
                'no_bpjs'=>$data->no_bppjs,
                'allergy'=>$data->allergy
            ];
        }
    }
    public function create(){
        \App\Models\Pasien::create($this->data);
    }

    public function render()
    {
        return view('livewire.form.pasien');
    }
}
