<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function becomeVolunteerMail()
    {
        $data = array('full_name' => 'Blaise Mennia');
        Mail::send('home.mail', $data, function($message) {
            $message->to('menniablaise@yahoo.com', 'Mr. Blaise')->subject('Laravel Test Email');
            $message->from('volunteer@mcgn.org', 'Cheerful Giver');
        });

        echo "HTML Email Sent. Check your inbox.";
    }
}
