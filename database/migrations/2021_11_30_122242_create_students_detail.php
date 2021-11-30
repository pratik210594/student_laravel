<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_detail', function (Blueprint $table) {
            $table->integer('id');
			$table->string('name');
			$table->string('email')->primary();
			$table->string('password');
			$table->string('school');
			$table->string('subjects');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_detail');
    }
}