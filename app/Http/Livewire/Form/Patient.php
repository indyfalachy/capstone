<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Patient extends Component
{
    public $action;
    public $data;
    public $dataId;
    public $optionBpjs;
    public $optionGender;
    public $optionReligion;

    public function mount()
    {
        $this->optionBpjs = [
            ['title' => 'Non-BPJS', 'value' => 1],
            ['title' => 'BPJS', 'value' => 2],
        ];
        $this->optionGender = [
            ['title' => 'Laki-laki', 'value' => 'Laki-laki'],
            ['title' => 'Perempuan', 'value' => 'Perempuan'],
        ];
        $this->optionReligion = [
            ['title' => 'Islam', 'value' => 'Islam'],
            ['title' => 'Kristen Protestan', 'value' => 'Kristen Protestan'],
            ['title' => 'Kristen Katolik', 'value' => 'PereKristen Katolikmpuan'],
            ['title' => 'Buddha', 'value' => 'Buddha'],
            ['title' => 'Hindu', 'value' => 'Hindu'],
            ['title' => 'Lainnya', 'value' => 'Lainnya'],
        ];
        $this->data = [
            'name' => '',
            'nik' => '',
            'address' => '',
            'birth_place' => '',
            'birth_date' => '',
            'village' => '',
            'district' => '',
            'gender' => 'Laki-laku',
            'religion' => 'Islam',
            'job' => '',
            'bpjs_status' => 1,
            'no_bpjs' => '',
            'allergy' => ''
        ];
        if ($this->dataId != null) {
            $data = \App\Models\Patient::find($this->dataId);
            $this->data = [
                'name' => $data->name,
                'nik' => $data->nik,
                'address' => $data->address,
                'birth_place' => $data->birth_place,
                'birth_date' => $data->birth_date,
                'village' => $data->village,
                'district' => $data->district,
                'gender' => $data->gender,
                'religion' => $data->religion,
                'job' => $data->job,
                'bpjs_status' => $data->bpjs_status,
                'no_bpjs' => $data->no_bppjs,
                'allergy' => $data->allergy
            ];
        }
    }

    protected $rules=
    [
            'data.name' => 'required|max:255',
            'data.nik' => 'required|max:255',
            'data.birth_place' => 'required',
            'data.birth_date' => 'required|date_format:Y-m-d',
            'data.village' => 'required|max:255',
            'data.district' => 'required|max:255',
        ];

    public function create()
    {
        $this->validate();
        \App\Models\Patient::create($this->data);
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Data berhasil masuk',
            'icon' => 'success'
        ]);
        $this->emit('redirect', route('admin.dashboard'));
    }

    public function render()
    {
        return view('livewire.form.patient');
    }
}
