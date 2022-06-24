<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $pasien=Pasien::class;
        return view('pages.pasien.index',compact('pasien'));
    }
    public function create(){

        return view('pages.pasien.create',);
    }
    public function edit($id){

        return view('pages.pasien.edit');
    }
}
