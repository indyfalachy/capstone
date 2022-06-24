<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $medicalRecord=MedicalRecord::class;
        return view('pages.medical-record.index',compact('medicalRecord'));
    }

    public function create()
    {
        return view('pages.medical-record.create');
    }

    public function edit($id)
    {
        return view('pages.medical-record.edit');
    }
}
