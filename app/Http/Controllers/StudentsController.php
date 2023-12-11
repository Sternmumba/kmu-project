<?php

namespace App\Http\Controllers;


class StudentsController extends Controller
{
    public function studentDashboard(){
        return view('student'); //view name
    }
    public function application(){
        return view('student.application'); //view name
    }
    public function viewInventory(){
        return view('student.viewInventory'); //view name
    }
    public function viewAssignedRoom(){
        return view('student.viewAssignedRoom'); //view name
    }
    public function reportQuery(){
        return view('student.reportQuery'); //view name
    }
    
}
