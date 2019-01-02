<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if( !Schema::hasTable('employees') ) {
            Schema::create('employees', function (Blueprint $table) {
                $table->increments('employee_id');
                $table->string('userRandomId');
                $table->string('firstname');
                $table->string('lastname');
                $table->string('gender');
                $table->string('birthday');
                $table->string('phone');
                $table->text('photo');
                $table->boolean('status');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
