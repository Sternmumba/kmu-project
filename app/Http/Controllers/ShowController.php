<?php



namespace App\Http\Controllers;

use app\Models\AssignedRoom;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {
        $data = AssignedRoom::with('student', 'AssignedRoom')->get(); // Eager load relationships
        dd($data); // Uncomment this line for debugging
        return view('student.viewAssignedRoom', ['data' => $data]); // Pass $data to the view
    }


}
