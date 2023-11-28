<?php

namespace App\Http\Controllers;
use App\Http\Requests\registerRequest;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function indexRegister(){
        return view('layouts.inscription');
    }

    public function store(registerRequest $request){
       
    }
}

