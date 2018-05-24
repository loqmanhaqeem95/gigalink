<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriberAdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriberAd', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('company_special'); 
            $table->string('country');
            $table->string('address');
            $table->string('postcode');                       
            $table->string('email');
            $table->string('contact'); 
            $table->string('message');                       
            $table->rememberToken();
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
        //
    }
}
