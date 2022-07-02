<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class User extends Component
{
    public $action;
    public $data;
    public $dataId;

    public function mount()
    {
        if ($this->dataId != null) {
            $data = \App\Models\User::find($this->dataId);
            $this->data = [
                'name'=>$data->name,
                'email'=>$data->email,
                'address'=>$data->addrees,
                'unit_service'=>$data->unit_service,
                'birth_place'=>$data->birth_place,
                'birth_date'=>$data->birth_date,
            ];
        }
    }
    public function create(){
        \App\Models\User::create($this->data);
    }

    public function render()
    {
        return view('livewire.form.user');
    }
}
