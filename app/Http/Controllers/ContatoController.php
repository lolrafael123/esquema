<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class ContatoController extends Controller
{
    public function enviaContato(Request $request){
        Mail::to('rh.antunes78@gmail.com')->send(new ContatoEmail($request));
    }
}
