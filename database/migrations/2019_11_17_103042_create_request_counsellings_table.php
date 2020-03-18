<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestCounsellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_counsellings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tName');
            $table->string('tEmail');
            $table->string('sName');
            $table->string('sEmail');
            $table->string('day');
            $table->string('time');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('request_counsellings');
    }
}
