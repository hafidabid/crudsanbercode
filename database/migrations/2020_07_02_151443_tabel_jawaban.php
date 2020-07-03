<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema :: create('jawaban',function (Blueprint $table){
            $table->increments('id');
            $table->string('judul');
            $table->mediumText('isi');
            $table->integer('id_pertanyaan')->unsigned();
            $table->timestamps();
        });

        Schema::table('jawaban',function (Blueprint $bp){
            $bp->foreign('id_pertanyaan')->references('id')->on('pertanyaan')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
        //
    }
}
