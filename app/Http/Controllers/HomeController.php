<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\home;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   
	public function show()
    {
	//	$students = DB::table('students_detail')->get();
        return view('list'); //"home"from login.blade action
    }
    public function index()
    {
		$students = Home::orderBy('id','DESC')->get(); 		//new
        return view('list',compact('students')); //"home"from login.blade action
    }
	
	
	public function addStudent(Request $request)
	{
		$student = new Home();
		$student->id = $request->id;
		$student->firstname = $request->firstname;
		$student->email = $request->email;
		$student->password = $request->password;
		$student->schoolid = $request->schoolid;
		$student->save();
		return response()->json($student);
	}
}
