<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        dd("indie anak baik");// buat table
    }

    public function create()
    {
        dd("Capstone project");
    }

    public function edit($id)
    {
        dd("uji coba ke $id");
    }
}
