<?php

namespace Yeamin\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Yeamin\Contact\Mail\ContactMail;
use Yeamin\Contact\Models\Contact;

class ContactController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('contact::contact');
    }

    public function submit(Request $request)
    {
//        return config('contact.send_mail_to');
        $data = Contact::create($request->only(['name','email','message']));
        Mail::to(config('contact.send_mail_to'))->send(new ContactMail($data));
        return Contact::all();
    }
}
