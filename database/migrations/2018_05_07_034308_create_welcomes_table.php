<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWelcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcomes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('header_title1');
            $table->string('header_title2');
            $table->string('header_title3');
            $table->string('header_title4');            
            $table->string('header_subtitle1');
            $table->string('header_subtitle2');
            $table->string('header_subtitle3');
            $table->string('header_subtitle4');
            $table->string('about_title');
            $table->string('about_desc');
            $table->string('service_title');
            $table->string('service_subtitle');
            $table->string('service_name1');
            $table->string('service_name2');
            $table->string('service_name3');            
            $table->string('service_name4');
            $table->string('service_name5');            
            $table->string('service_name6');
            $table->string('project_title');
            $table->string('project_subtitle');
            $table->string('project_name1');
            $table->string('project_name2');
            $table->string('project_name3');
            $table->string('project_name4');
            $table->string('ratecard_title');
            $table->string('ratecard_subtitle');
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
        Schema::dropIfExists('welcomes');
    }
}
