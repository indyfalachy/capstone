<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicalRecord;
use App\Models\Patient;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $medicalRecord = MedicalRecord::class;
        return view('pages.medical-record.index', compact('medicalRecord'));
    }

    public function create($id)
    {
        $patient = Patient::findOrFail($id);
        return view('pages.medical-record.create', compact('patient'));
//        return view('pages.medical-record.create');
    }

    public function edit($id)
    {
        return view('pages.medical-record.edit');
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        return view('pages.medical-record.show', compact('patient'));
    }

    public function addOdontogram($id)
    {
        return view('pages.medical-record.add-odontogram', compact('id'));
    }

    public function showOdontogram($id)
    {
        $odontogram=MedicalRecord::find($id);
        return view('pages.medical-record.show-odontogram', compact('id','odontogram'));
    }

    public function storeOdontogram(Request $request, $id)
    {
        $odontogram = $request->all();
        $odon = json_encode($odontogram['odontogram']);
//        dd($odon);
        $odontogram = MedicalRecord::find($id);
        $odontogram->update(['odontogram' => $odon]);
        return redirect(route('admin.medical-record.show',$odontogram->patient_id));
    }


}
