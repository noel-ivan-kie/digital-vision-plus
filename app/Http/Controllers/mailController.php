<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function mail(Request $request)
    {
        $user = $request;
        Mail::to('noelolivierjunior@gmail.com')
         
            ->send(new contact($user));
        return redirect()->back()->with('message', 'Message envoyé avec succès !');
    }
}
