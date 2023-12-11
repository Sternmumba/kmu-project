<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Application;
use App\Http\Controllers\HomeController;
use App\Models\Query;
use App\Models\AssignedRoom;
use App\Models\Inventorie;


class HomeController extends Controller
{
    public function studentlogout(){
        Session::flush();
        Auth::studentlogout();
        return redirect('/');
    }
    public function student(){
        return view('student');
    }

    public function index()
    {
        $role=Auth::user()->role;
        if($role=='1'){
            return view('student_coordinator');
        }
        if($role=='2'){
            return view('hall_warden');
        }if($role=='3'){
            return view('student');
        }else{
            return view('super_admin');
        }
    }
    public function hall_warden(){
        return view('hall_warden');
    }
    //queries
    public function queries(Request $request){
        $data=new query;
        $data->student_id=$request->student_id;
        $data->room_number=$request->room_number;
        $data->room_issue=$request->room_issue;
        $data->other_issue=$request->other_issue;
      
        $data->save();
        return redirect()->back();
    }


    public function show($id)
    {
       
        $student = Assigned_room::findOrFail($id);

        return view('student.viewAssignedRoom', compact('student'));
    }


   
   

    
}
