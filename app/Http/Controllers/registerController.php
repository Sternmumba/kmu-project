<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class registerController extends Controller
{
    public function index()
    {
        $students = student::all();
        return view ('register_student.index')->with('students', $students);
    }
 
   
    public function create()
    {
        return view('register_student.create');
    }
 
    
    public function store(Request $request)
{
    $input = $request->all();
    student::create($input);
    return redirect('register_student')->with('flash_message', 'Added!');

}
 
    
    public function show($id)
    {
        $students = student::find($id);
        return view('register_student.show')->with('students', $students);
    }
 
    
    public function edit($id)
    {
        $students = student::find($id);
        return view('register_student.edit')->with('students', $students);
    }
 
    
    public function update(Request $request, $id)
    {
        $students = student::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('register_student')->with('flash_message', ' Updated!');  
    }
 
    
    public function destroy($id)
{
    student::destroy($id);
    return redirect('register_student')->with('flash_message', 'Deleted!');
}
}
