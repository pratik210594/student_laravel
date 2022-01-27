<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Home extends Model{
	
		use HasFactory;
		protected $table = "students";
		protected $fillable = ["id","name","email","password","school_id"];
		
}