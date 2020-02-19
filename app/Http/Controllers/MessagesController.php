<?php

namespace App\Http\Controllers;
use Illuminate/Support/Facades/Mail;


class MessagesController extends Controller
{
	public function store(){
		request()->validate([
			'name' => 'required',
			'email'=>'required|email',
			'subject'=>'required',
			'content'=>'required|min:3'
		], [
			'name.required' =>'Pusiste mal tu nombre bro '
		]);
		//Sending E-Mails with laravel

		return 'datos validados';
	}
}
