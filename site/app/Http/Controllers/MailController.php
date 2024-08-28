<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resend\Laravel\Facades\Resend;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $subject = $request['subject'];
        $message = $request['message'];

        Resend::emails()->send([
            'from' => '' . $name . '<contact@rorystock.com>',
            'to' => 'rorystock06@gmail.com',
            'subject' => $subject,
            'html' => '
            <h3>Sender Name: <h4>'. $name .'</h4></h3><br>
            <h3>Sender Email: <h4>'. $email .'</h4></h3><br>
            <h3>Message: <h4>'. $message .'</h4></h3>
            ',
        ]);
        return redirect('/contact');
    }
}
