<?php

namespace Bryt\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bryt\Contact\Models\Contact;
use Bryt\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));

        Contact::create($request->all());

        return back();
    }

}
