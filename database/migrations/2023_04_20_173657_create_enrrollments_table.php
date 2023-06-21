<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrrollments', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("career_id")->unsigned();
            $table->foreign("career_id")->references("id")->
            on("careers")->onDelete("cascade")->onUpdate("cascade");
            $table->integer("student_id")->unsigned();
            $table->foreign("student_id")->references("id")->
            on("students")->onDelete("cascade")->onUpdate("cascade");
            $table->date("date");
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
        Schema::dropIfExists('enrrollments');
    }
}
