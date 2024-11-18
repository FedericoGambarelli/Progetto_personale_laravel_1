<?php

namespace App\Http\Controllers;

use App\Mail\Assistenza;
use App\Mail\Confirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RequestMailCustom;

class MailController extends Controller
{
    public function Confirmation(RequestMailCustom $request){
        $name = $request->name;
        $email = $request->email;
        $messaggio = $request->messaggio;
        Mail::to($email)->send(new Confirmation($name, $email, $messaggio));
        Mail::to('assistenza@arcade.it')->send(new Assistenza($name, $email, $messaggio));

        return redirect('/')->with('success-confirmation', 'La tua richiesta sarà esaminata il prima possibile');
    }

}
