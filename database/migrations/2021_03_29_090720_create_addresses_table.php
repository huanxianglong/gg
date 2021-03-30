<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('receiver_name');
            $table->string('receiver_contact');
            $table->string('receiver_email');
            $table->string('address1');
            $table->string('address2');
            $table->int('city_id')->unique();
            $table->int('state_id')->unique();
            $table->int('country_id')->unique();
            $table->int('postcode');
            $table->timestamps();
        });
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
