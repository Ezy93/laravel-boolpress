<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contact(){
        return view('guest.contacts');
    }

    public function contactSend(Request $request){
        dd($request->all());
        return redirect('guest.home')->with('message', 'il messaggio è stato inviato correttamente');
    }
}
