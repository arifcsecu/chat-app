<?php

namespace App\Http\Controllers;

use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $toEmail = "bettercodesapp@gmail.com";
        $message = "Hello, Welcome to our website";
        $subject = "Welcome to Arifworld";

        $request = Mail::to($toEmail)->send(new welcomeemail($message,$subject));

        dd($request);

    }

    public function contactForm()
    {
        return view('mail.contact');
    }

    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:10|max:255',
            'attachment' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:2048',
        ]);

        $fileName =time().".".$request->file('attachment')->extension();
        $request->file('attachment')->move('uploads',$fileName);

        dd($fileName);
    }
}
