<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicalInitial;
use App\Models\Patient;
use Illuminate\Http\Request;

class MedicalInitialController extends Controller
{
    public function index()
    {
        $medicalInitial=MedicalInitial::class;
        return view('pages.medical-initial.index',compact('medicalInitial'));
    }

    public function create()
    {

        return view('pages.medical-initial.create');
    }

    public function edit($id)
    {
        return view('pages.medical-initial.edit');
    }

}
