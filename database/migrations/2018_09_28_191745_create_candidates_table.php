<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('motivation');
            $table->string('linkedin');
            $table->string('github');
            $table->float('desired_salary');
            $table->string('curriculum');
            $table->enum('status', ['candidatado', 'analisado', 'negado', 'contratado'])->default('candidatado');
            $table->enum('english', ['básico', 'intermediario', 'avançado']);
            $table->integer('vacancy_id')->unsigned()->nullable();
            $table->foreign('vacancy_id')->references('id')->on('vacancies');

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
        Schema::dropIfExists('candidates');
    }
}
