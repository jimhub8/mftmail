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
            'phone' => 'required',
            'address' => 'required'
        ]);

        $message = 'Thank you for placing an order. A customer service agent will get in touch with you soon. For any inquiry please email us on sales@dala.market';


        Mail::send(new SendMail($request->all()));
        return redirect()->back()->with('message', $message);
    }
}
