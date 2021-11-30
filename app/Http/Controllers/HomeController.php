<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	public function show()
    {
		$students = DB::table('students_detail')->get();
        return view('list'); //"home"from login.blade action
    }
    public function index()
    {
		$students = DB::table('students_detail')->get(); 		//new
        return view('list',compact('students')); //"home"from login.blade action
    }
}
