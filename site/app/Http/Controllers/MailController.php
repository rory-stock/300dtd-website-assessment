<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
public function sendMail(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
    ]);

    $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message
    );


    Mail::send('pages.contact', $data, function ($message) use ($data) {
        $message->from($data['email']);
        $message->to('rorystock06@gmail.com');
        $message->subject($data['subject']);
    });
}

}
