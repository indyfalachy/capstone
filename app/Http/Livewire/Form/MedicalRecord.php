<?php

namespace App\Http\Livewire\Form;

use App\Models\UnitService;
use Livewire\Component;

class MedicalRecord extends Component
{
    public $action;
    public $data;
    public $dataId;
    public $patientId;
    public $optionUnitService;
    public $optionType;

    public function mount()
    {

        $this->optionUnitService=[
            ['value'=>null , 'title'=>'']
        ];
        $this->optionType=[
            ['value'=>null , 'title'=>''],
            ['value'=>'B' , 'title'=>'B'],
            ['value'=>'L' , 'title'=>'L'],
            ['value'=>'KKL' , 'title'=>'KKL']
        ];
        foreach (UnitService::get() as $us){
          array_push($this->optionUnitService,['value'=>$us->id,'title'=>$us->title]);
        }
//        dd($this->optionUnitService);
        $this->data = [
            'user_id'=>auth()->id(),
            'patient_id'=>$this->patientId,
            'unit_service_id'=>auth()->user()->unit_service_id,
            'file_location'=>'',
            'soap'=>'',
            'action'=>'',
            'type'=>'',
            'refer'=>null,
            'file_addition'=>'',
        ];
        if ($this->dataId != null) {
            $data = \App\Models\MedicalRecord::find($this->dataId);
            $this->data = [
                'user_id'=>$data->user_id,
                'patient_id'=>$data->patient_id,
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
    protected $rules=
        [
            'data.soap' => 'required',
            'data.action' => 'required',
        ];

    public function create(){
        $this->validate();
        \App\Models\MedicalRecord::create($this->data);
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Data berhasil masuk',
            'icon' => 'success'
        ]);
        $this->emit('redirect', route('admin.medical-record.show',$this->patientId));
    }

    public function render()
    {
        return view('livewire.form.medical-record');
    }
}
