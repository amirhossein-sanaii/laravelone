<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tasks_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titletask');
            $table->text('descriptiontask');
            $table->string('datestarttask')->nullable();
            $table->string('dateendtask')->nullable();
            $table->string('timerequired')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('progect_id');

            $table->foreign('progect_id')->references('id')->on('progects_table')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tasks_table');
    }
}
