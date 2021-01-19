<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->Validate($request, [
            'full_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required'
        ]);
        $data = $request->all();
        $order = Order::latest()->first('order_no');

        if($order) {
            $order_arr = explode('_',$order->order_no);
            $order_no = (int)$order_arr[1] + 1;
        } else{
            $order_no = 1004;
        }

        $data['order_no'] = 'ORD_' . $order_no;


        // $order_no =

        Order::create($data);

        $message = 'Thank you for placing an order. A customer service agent will get in touch with you soon. For any inquiry please email us on sales@dala.market';

        Mail::send(new SendMail($data));
        return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
