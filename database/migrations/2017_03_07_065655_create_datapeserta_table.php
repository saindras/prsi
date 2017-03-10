<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatapesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapeserta', function (Blueprint $table) {
            $table->increments('idpeserta');
            $table->string('namapeserta', 50);
            $table->enum('jk',['L', 'P']);
            $table->date('tgllahir');
            $table->string('asalsekolah', 100);
            $table->integer('umur')->nullable();
            $table->char('kelompokumur',2)->nullable();
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
        Schema::dropIfExists('datapeserta');
    }
}