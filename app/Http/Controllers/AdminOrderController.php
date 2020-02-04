<?php

namespace App\Http\Controllers;

use App\Colour;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function colour(){
        $colours = Colour::all();
        return view('admin.colour', compact('colours'));
    }

    public function addColour(Request $request){

        $request->validate([
            'colour_name' => 'required',
            'colour_code' => 'required'
        ]);        

        Colour::create([
            'name' => $request->colour_name,
            'code' => $request->colour_code
        ]);

        return back();

    }

    public function deleteColour($id){
        Colour::where('id', $id)->delete();
        return back();
    }

}
