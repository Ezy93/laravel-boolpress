<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function contact(){
        return view('guest.contacts');
    }

    public function contactSend(Request $request){
        Mail::to($request->guestMail)->send(new SendNewMail($request->guestName, $request->guestMail, $request->guestMessage));
        return redirect()->route('guest.contact')->with('message', "$request->guestName il messaggio è stato inviato correttamente");
    }
}
