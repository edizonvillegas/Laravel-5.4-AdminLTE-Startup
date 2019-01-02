<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('addresses') ) {
            Schema::create('addresses', function (Blueprint $table) {
                $table->increments('address_id');
                $table->string('present_address_no');
                $table->string('present_address_street');
                $table->string('present_address_barangay');
                $table->string('present_address_city');
                $table->string('present_address_country');
                $table->integer('present_address_zipcode');
                $table->string('permanent_address_no');
                $table->string('permanent_address_street');
                $table->string('permanent_address_barangay');
                $table->string('permanent_address_city');
                $table->string('permanent_address_country');
                $table->integer('permanent_address_zipcode');
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
        Schema::dropIfExists('addresses');
    }
}
