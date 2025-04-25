<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('Pveiculos.homme');
    }
    public function store(Request $request){
      $sent =  Mail::to('kassandra.schoen@ethereal.email', 'kassandra')->send(new Contact([
            'fromName' => $request->input('name'),
            'fromEmail' => $request->input('email'),
            'message' => $request->input('message'),
        ]));
            return redirect()->route('Pveiculos')->with('success', 'E-mail enviado com sucesso');
    }
}
