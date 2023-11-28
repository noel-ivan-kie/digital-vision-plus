<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutscontroller extends Controller
{
    //controlleur en rapport avec les vus
    public function viewhome()
    {
        return view('layouts.index');
    }
    public function viewabout()
    {
        return view('layouts.about');
    }
    public function viewservices1()
    {
        return view('layouts.service.services1');
    }
    public function viewservices2()
    {
        return view('layouts.service.services2');
    }
    public function viewservices3()
    {
        return view('layouts.service.services3');
    }

    public function viewevenement()
    {
        return view('layouts.evenement');
    }
    public function viewcontact()
    {
        return view('layouts.contact');
    }
    //controlleur en rapport avec les reseau sociau
    public function facebook()
    {
        $facebook = 'https://www.facebook.com';
        return redirect()->away($facebook);
    }
    public function instagram()
    {
        $instagram = 'https://';
        return redirect()->away($instagram);
    }
    public function linkedin()
    {
        $linkedin = 'https://';
        return redirect()->away($linkedin);
    }
    public function youtube()
    {
        $youtube = 'https://';
        return redirect()->away($youtube);
    }
    //controlleur en rapport avec les reseau sociau du DG
}
