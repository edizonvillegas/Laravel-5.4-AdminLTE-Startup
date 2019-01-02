<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('families') ) {
            Schema::create('families', function (Blueprint $table) {
                $table->increments('family_id');
                $table->string('mother_firstname');
                $table->string('mother_lastname');
                $table->string('mother_birthdate');
                $table->string('mother_occupation');

                $table->string('father_firstname');
                $table->string('father_lastname');
                $table->string('father_birthdate');
                $table->string('father_occupation');
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
        Schema::dropIfExists('families');
    }
}
