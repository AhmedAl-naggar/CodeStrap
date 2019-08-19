<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);

        Mail::to('alnaggar98@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('message','Thanks, your message is sent successfully and will be in touch.');
    }
}
