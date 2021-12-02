<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   	function show()
	{
		return view('list');
	}
	
	public function deleteStudent($id)
	{
		$student = DB::find($id);
		$student->delete();
		return response()->json(['success'=>'Record Deleted']);
	}
}
