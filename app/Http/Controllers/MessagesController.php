<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


class MessagesController extends Controller
{
	public function store(){
		$message = request()->validate([
			'name' => 'required',
			'email'=>'required|email',
			'subject'=>'required',
			'content'=>'required'
		], [
			'name.required' =>'Pusiste mal tu nombre bro '
		]);
		//Sending E-Mails with laravel

		Mail::to('luis@ea.com')->queue(new MessageReceived($message));
		//return new MessageReceived($message);

		return back()->with('status','Mensaje recibido carnal');
	}
}
