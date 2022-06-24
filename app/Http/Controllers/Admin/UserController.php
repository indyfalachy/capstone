<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user=user::class;
        return view('pages.user.index',compact('user'));
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function edit($id)
    {
        return view('pages.user.create');
    }
}
