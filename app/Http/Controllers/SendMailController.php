<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send(Request $request)
    {
        // return $request->all();
        $this->Validate($request, [
            'full_name' => 'required',
            'phone' => 'required|numeric',
        ]);
        Mail::send(new SendMail($request->all()));
        return redirect()->back()->with('message', 'Thank you for placing the order');
    }
}
