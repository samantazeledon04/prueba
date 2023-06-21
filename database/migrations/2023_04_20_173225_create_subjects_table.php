<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("career_id")->unsigned();
            $table->foreign("career_id")->references("id")->
            on("careers")->onDelete("cascade")->onUpdate("cascade");
            $table->integer("teacher_id")->unsigned();
            $table->foreign("teacher_id")->references("id")->
            on("teachers")->onDelete("cascade")->onUpdate("cascade");
            $table->string("name",30);
            $table->datetime("shedule");
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
        Schema::dropIfExists('subjects');
    }
}
