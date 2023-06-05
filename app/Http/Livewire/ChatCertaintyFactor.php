<?php

namespace App\Http\Livewire;

use App\Models\Disease;
use App\Models\Symptom;
use App\Models\SymptomOfDisease;
use Livewire\Component;

class ChatCertaintyFactor extends Component
{
    public $chat;
    public $symptoms;
    public $userSymptom;
    public $chatCertainly;

    public $userCertainly;

    public $certainly;

    public $cfStatus;
    public $errorMessage;


    public function mount()
    {
        $this->symptoms = Symptom::get();
        $this->certainly = [
            1 => 'Tidak tahu',
            2 => 'Mungkin',
            3 => 'Kemungkinan besar iya',
            4 => 'Hampir yakin',
            5 => 'Tentu',
        ];
    }

    public function setAnalytics()
    {
        if ($this->userSymptom != null) {
            foreach ($this->userSymptom as $index => $s) {
                if ($s == false) {
                    unset($this->userSymptom[$index]);
                }
            }
        }
        if ($this->userSymptom != null) {
            $this->chatCertainly = true;
            unset($this->errorMessage['nullSymptoms']);
        } else {
            $this->errorMessage['nullSymptoms'] = true;
        }
    }

    public function certaintyFactor()
    {
        $changeDisease = [];
        $diseasePercentage = [];
        foreach ($this->userSymptom as $index => $s) {
            $d = SymptomOfDisease::where('symptom_id', $index)
                                 ->get();
            foreach ($d as $e) {
                if (!in_array($e->disease_id, $changeDisease)) {
                    $changeDisease[] = $e->disease_id;
                    $diseasePercentage[$e->disease_id] = 0;
                }
            }
        }

        foreach (
            Disease::whereIn('id', $changeDisease)
                   ->get() as $d
        ) {
            foreach ($d->symptomOfDiseases as $sod) {
                foreach ($this->userSymptom as $index => $s) {
                    if ($sod->symptom_id == $index) {
                        $diseasePercentage[$d->id]
                            = $diseasePercentage[$d->id] +
                            (intval($s) * 0.2
                                * Symptom::find($index)->weight)
                            * (1 - $diseasePercentage[$d->id]);
                    }
                }
            }
        }


//        foreach ($changeDisease as $d)
        return $diseasePercentage;
    }

    public function render()
    {
        $this->cfStatus = true;
        return view('livewire.chat-certainty-factor');
    }
}
