<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
             
            $table->bigIncrements('id');
            $table->text('enonce', 500);
            $table->integer('bareme');
            $table->text('rep1');
            $table->text('rep2');
            $table->text('rep3');
            $table->text('repb');
            $table->integer('id_examen');
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
        Schema::dropIfExists('questions');
    }
}
