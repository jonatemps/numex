<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
        public function index() {

            return view('contact');
        }

        public function save(Request $request) {

            // dd($request->input());
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required'
            ]);

            $contact = new Contact();

            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;

            $contact->save();

            // Mail::send('contact_email',
            //  array(
            //      'name' => $request->get('name'),
            //      'email' => $request->get('email'),
            //      'subject' => $request->get('subject'),
            //      'user_message' => $request->get('message'),
            //  ), function($message) use ($request)
            //    {
            //       $message->from($request->email);
            //       $message->to('mupene7@gmail.com');
            //    });


            return back()->with('success', 'Merci de nous avoir contacté !');

        }
}
