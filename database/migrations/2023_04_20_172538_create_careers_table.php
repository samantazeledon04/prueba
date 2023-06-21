<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("classroom_id")->unsigned();
            $table->foreign("classroom_id")->references("id")->
            on("classrooms")->onDelete("cascade")->onUpdate("cascade");
            $table->string("name",50);
            $table->datetime("duration");
            $table->string("shift",10);
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
        Schema::dropIfExists('careers');
    }
}
