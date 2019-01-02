<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //if( !Schema::hasTable('experienced') ) {
            Schema::create('experienced', function (Blueprint $table) {
                $table->increments('experienced_id');
                $table->string('experienced_user_id');
                $table->string('experienced_company_name');
                $table->string('experienced_company_position');
                $table->string('experienced_company_start');
                $table->string('experienced_company_end');
                $table->timestamps();
            });
        //}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experienced');
    }
}
