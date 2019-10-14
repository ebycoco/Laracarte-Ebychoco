<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create(){
        return view('contacts.create');
    }
    public function store(ContactRequest $request){
        $message=Message::create($request->only('name','email','message'));
        Mail::to(config('laracarte.admin_support_email'))
                ->send(new ContactMessageCreated($message));
        Flashy('Nous vous repondrons dans les plus bref délais!');
        return redirect()->route('home_path');
    }
}
