<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;
use App\Models\guardian;

class StudentController extends Controller
{
    public function index()
    {
        $rooms = room::all();
        return view ('student_coordinator.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student_coordinator.create');
    }
    public function view_available_rooms()
    {
        // $rooms   = room::all()->where('hostel_name',$hostel_name);
        $hostels = room::groupBy('hostel_name')->get();

        return view('student_coordinator.view_available_rooms')->with("hostels", $hostels);
    }

    public function view_by_hostel($hostel_name = 'W')
    {
        $rooms   = room::all()->where('hostel_name',$hostel_name);
        return view('student_coordinator.view_by_hostel')->with("rooms", $rooms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        room::create($request->all());

        return redirect()->route('student_coordinator')->with('success', 'Room added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rooms = room::findOrFail($id);

        return view('student_coordinator.show', compact('rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rooms = room::findOrFail($id);

        return view('student_coordinator.edit', compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rooms = room::findOrFail($id);

        $rooms->update($request->all());

        return redirect()->route('student_coordinator')->with('success', 'Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rooms = room::findOrFail($id);

        $rooms->delete();

        return redirect()->route('student_coordinator')->with('success', 'Room deleted successfully');
    }
}

