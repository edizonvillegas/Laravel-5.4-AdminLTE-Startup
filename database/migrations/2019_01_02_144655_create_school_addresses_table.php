<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('school_addresses') ) {
            Schema::create('school_addresses', function (Blueprint $table) {
                $table->increments('school_address_id');

                $table->string('primary_address_no');
                $table->string('primary_address_street');
                $table->string('primary_address_barangay');
                $table->string('primary_address_city');
                $table->string('primary_address_country');
                $table->integer('primary_address_zipcode');

                $table->string('secondary_address_no');
                $table->string('secondary_address_street');
                $table->string('secondary_address_barangay');
                $table->string('secondary_address_city');
                $table->string('secondary_address_country');
                $table->integer('secondary_address_zipcode');

                $table->string('college_address_no');
                $table->string('college_address_street');
                $table->string('college_address_barangay');
                $table->string('college_address_city');
                $table->string('college_address_country');
                $table->integer('college_address_zipcode');

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
        Schema::dropIfExists('school_addresses');
    }
}
