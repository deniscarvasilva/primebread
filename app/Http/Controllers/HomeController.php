<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContatoEmail;
use Mail;

class HomeController extends Controller
{
    public function enviaContato( Request $request)
    {
        \Mail::to('enginesy@gmail.com')->send(new ContatoEmail($request));
        return view('welcome');
    }  
}
