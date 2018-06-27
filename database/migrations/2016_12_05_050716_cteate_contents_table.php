<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CteateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('contents', function (Blueprint $table) {
             $table->increments('id');
             $table->string('body');
             $table->string('time');
             $table->date('date');
             $table->integer('user_id')->unsigned()->index();
             $table->integer('project_id')->unsigned()->index();
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
        Schema::dropIfExists('contents');
    }
}
