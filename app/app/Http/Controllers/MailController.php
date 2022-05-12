<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import classes for mail
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Event;
use App\Mail\Email;

class MailController extends Controller
{
    // Send email to users
	public function sendMail ($event_id) {
        $data = [
            'body' => 'Great Job ! Your suggestion was approved.'
        ];

		#1. Retrieve users
        $event = Event::find($event_id);
		$user = User::find($event->user_id)->where('role_id', 3);

		#2. Send the mail
		Mail::to($user->email)->send(new Email());

		return back()->withText("Email sent successfully");
	}
}
