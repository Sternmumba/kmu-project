<?php

namespace App\Http\Controllers;

use App\Models\queries; // Assuming your model is named 'Query' instead of 'queries'
use Illuminate\Support\Carbon; // Fixing the typo in 'support'
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index(Request $request)
    {
        $queries =queries::when($request->date != null, function ($q) use ($request) {
            return $q->whereDate('created_at', '=', $request->date);
        })
        ->when($request->status != null, function ($q) use ($request) {
            return $q->where('query_status', $request->status);
        })
        ->paginate(10);

        return view('queries.index', compact('queries'));
    }

 
   
    public function show($id)
    {
        $queries = queries::find($id);
        return view('queries.show')->with('queries', $queries);
    }

  
    public function update(Request $request, $id)
    {
        $queries = queries::find($id);
        $input = $request->all();
        $queries->update($input);
        return redirect('queries')->with('flash_message', ' Updated!');  
    }
 
   
    public function destroy($id)
    {
        queries::destroy($id);
        return redirect('queries')->with('flash_message', 'queries deleted!');  
    }
}
