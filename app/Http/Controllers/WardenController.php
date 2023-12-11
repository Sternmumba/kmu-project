<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\student;
use App\models\inventorie;
class WardenController extends Controller
{
    public function issue_inventory(){
        return view('hall_warden.issue_inventory');
    }
    public function shift_rooms(){
        return view('hall_warden.shift_rooms');
    }

    public function add_inventory(Request $request){

        $data=new inventorie;
        $data->student_id=$request->student_id;
        $data->mattress_code=$request->mattress_code;
        $data->curtains=$request->curtains;
        $data->room_keys=$request->room_keys;
        $data->bed_code=$request->bed_code;
        $data->room_lock=$request->room_lock;
        $data->stove=$request->stove;
        $data->fridge=$request->fridge;
        $data->waste_bin=$request->waste_bin;
        $data->save();
        return redirect()->back();

    }

public function profile(){
    return view('warden.profile');
}

public function logout(){
    auth()->logout();
    return redirect()->route('login');

}
}
