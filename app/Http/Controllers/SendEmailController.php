<?php

namespace App\Http\Controllers;

use App\Mail\getDemo;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
	public function send(Request $request){

		$data = $request->all();
		$sended = Mail::to('contacto@nuagepro.io')
			->send(new SendEmail($data));

		return redirect()->back()->with('success', 'Envío exitoso, te contactaremos');
	}

	public function sendDemo(Request $request){

		$data = $request->all();
		$sended = Mail::to('contacto@nuagepro.io')
			->send(new getDemo($data));

		return redirect()->back();
	}
}
