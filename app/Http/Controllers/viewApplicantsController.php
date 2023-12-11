<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;
use App\Models\guardian;
use App\Models\application;
use App\Models\student;

class viewApplicantsController extends Controller
{
    public function index()
    {    
        
    
        $applications = application::all();
        return view ('view_applicants.index')->with('applications', $applications);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('view_applicants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        application::create($request->all());

        return redirect()->route('applications')->with('success', 'Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $applications=room::findOrFail($id);

        return view('view_applicants.show', compact('applications'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $applications= application::findOrFail($id);

        return view('view_applicants.edit', compact('applications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $app= application::findOrFail($id);

        $app->update($request->all());

        return redirect()->route('view_applicants')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $applications= application::findOrFail($id);

        $applications->delete();

        return redirect()->route('view_applicants')->with('success', 'Deleted successfully');
    }
    public function view_accepted()
    {
        $assigned_rooms = assigned_room::all();
        return view ('accepted_applicants.index')->with('assigned_rooms', $assigned_rooms);
    }
}

