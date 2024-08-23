<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // public function send(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'message' => 'required|string',
    //     ]);

    //     $email = $request->input('email');
    //     $messageContent = $request->input('message');

    //     // Send the email using Laravel's Mail facade
    //     Mail::send([], [], function ($message) use ($email, $messageContent) {
    //         $message->to('Lydia.bouzar-benlabiod@acadiau.ca')
    //                 ->from($email)
    //                 ->subject('Contact Form Submission')
    //                 ->setBody($messageContent, 'text/html');
    //     });

    //     // Return the 'welcome' view with a success message
    //     return view('welcome')->with('success', 'Your message has been sent!');
    // }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $details = [
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to('kl7717105@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Your message has been sent!');
    }

}
