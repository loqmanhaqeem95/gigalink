<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age'); 
            $table->string('nationality');
            $table->string('contact');
            $table->string('email');                       
            $table->string('address');
            $table->string('company_name')->nullable(); 
            $table->string('company_contact')->nullable(); 
            $table->string('company_address')->nullable(); 
            $table->string('company_experience')->nullable(); 
            $table->string('message')->nullable(); 
            $table->string('brand1')->nullable(); 
            $table->string('brand2')->nullable(); 
            $table->string('brand3')->nullable(); 
            $table->string('why_join')->nullable(); 
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
        Schema::dropIfExists('resellers');
    }
}
