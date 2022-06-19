<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        return view('pages.pasien.index');
    }
    public function create(){
        return view('pages.pasien.create');
    }
    public function edit($id){
        return view('pages.pasien.edit',compact('id'));
    }
}
