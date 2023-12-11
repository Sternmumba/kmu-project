<?php

namespace App\Http\Controllers;
use App\Models\inventorie;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = inventorie::all();
        return view ('inventories.index')->with('inventories', $inventories);
    }
    public function show1()
    {
        $inventories = inventorie::all();
        return view ('inventories.index')->with('inventories', $inventories);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventories.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        inventorie::create($input);
        return redirect('inventories')->with('flash_message', 'Inventory Given!');  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventories = inventorie::find($id);
        return view('inventories.show')->with('inventories', $inventories);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventories = inventorie::find($id);
        return view('inventories.edit')->with('inventories', $inventories);
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
        $inventories = inventorie::find($id);
        $input = $request->all();
        $inventories->update($input);
        return redirect('inventories')->with('flash_message', ' Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        inventorie::destroy($id);
        return redirect('inventories')->with('flash_message', 'Inventories deleted!');  
    }
}
