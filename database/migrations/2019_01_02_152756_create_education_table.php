<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('education') ) {
            Schema::create('education', function (Blueprint $table) {
                $table->increments('education_id');
                $table->string('primary_school_name');
                $table->string('primary_school_year_from');
                $table->string('primary_school_year_to');
                $table->string('secondary_school_name');
                $table->string('secondary_school_year_from');
                $table->string('secondary_school_year_to');
                $table->string('college_school_name');
                $table->string('college_school_course');
                $table->string('college_school_year_from');
                $table->string('college_school_year_to');
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
        Schema::dropIfExists('education');
    }
}
