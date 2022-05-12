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
    // Message Form
	public function formMail () {
		return view("forms.mail");
	}

    // Send email to users
	public function sendAdminMail (Request $request, $event_id) {
        $data = [
            'body' => 'Great Job guy, your suggestion was approved.'
        ];

		#1. Validate the request
		$this->validate($request, [ 'message' => 'bail|required' ]);

		#2. Retrieve users
        $event = Event::find($event_id);
		$user = User::find($event->user_id)->where('role_id', 3);
        $admin = User::find()->where('role_id', 1);

		#3. Send the mail
		Mail::to($user)->bcc($bde->email)
						->queue(new Email($request->all()));

		return back()->withText("Email sent successfully");
	}
}
