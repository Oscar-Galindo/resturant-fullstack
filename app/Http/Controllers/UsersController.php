<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
    return view('admin/users/all');
    }
    public function create(){
    return view('admin/users/create');
    }
    public function edit(){
    return view('admin/users/edit');
    }
}
