<?php

namespace App\Http\Controllers;

use App\Colour;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderViewController extends Controller
{
    public function add(){
        $colours = Colour::all();
        return view('website.add', compact('colours'));
    }

    public function save(Request $request){
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'product_name' => 'required',
            'colour_name' => 'required',
            'order_amount' => 'required',
        ]);

        $colour = Colour::where('code', $request->colour_name)->first();
        $code = $colour->id;

        $order_id = Order::insertGetId([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'product_name' => $request->product_name,
            'colour' => $code,
            'amount' => $request->order_amount,
            'status' => 'pending',
            'created_at' => Carbon::now()
        ]);

        $order_number = "CARSCRM$order_id";

        Order::where('id', $order_id)->update([
            'order_number' => $order_number
        ]);

        return redirect(route('order.valide'))->with('order_number', $order_number);
    }

    public function verifyVal(Request $request){
        $order_number = $request->order_number;
        if(!Order::where('order_number', $order_number)->first()){
            return view('website.invalid');
        }else{
            return redirect(route('order.payment', ['id' => $order_number]));
        }
    }

    public function valide(){
        if(session('order_number')){
            return redirect(route('order.payment', ['id' => session('order_number')]));
        }else{
            return back();
        }
    }
    public function verify(){
        return view('website.verify');
    }

    public function payment($id){
        $order = Order::with('colours')->where('order_number', $id)->firstOrFail();
        if($order->trs_no != NULL){
            return view('website.info', compact('order'));
            // dd($order);
        }else{
            return view('website.payment', compact('order'));
        }
    }

    public function paymentAdd(Request $request, $id){
        Order::where('order_number', $id)->update([
            'trs_no' => $request->trs_no
        ]);

        return back();
    }
}
