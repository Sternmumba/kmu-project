<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\assigned_room;

class acceptedController extends Controller
{
    public function index()
    {
        $assigned_rooms = assigned_room::all();
        return view ('accepted_applicants.index')->with('assigned_rooms', $assigned_rooms);
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assigned_rooms = assigned_room::find($id);
        return view('accepted_applicants.show')->with('assigned_rooms', $assigned_rooms);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assigned_rooms = assigned_room::find($id);
        return view('accepted_applicants.edit')->with('assigned_rooms', $assigned_rooms);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $assigned_rooms = assigned_room::find($id);
        $input = $request->all();
        $assigned_rooms->update($input);
        return redirect('accepted_applicants')->with('flash_message', ' Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        assigned_room::destroy($id);
        return redirect('accepted_applicants')->with('flash_message', 'Deleted!');  
    }
}
