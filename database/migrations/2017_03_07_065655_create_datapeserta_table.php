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
            $table->string('asalsekolah', 50);
            $table->integer('umur');
            $table->char('kelompokumur',3);
            $table->timestamps();
            $table->string('slug',15);
            $table->string('nolomba1',50);
            $table->string('nolomba2',50);
            $table->string('nolomba3',50);
            $table->string('nolomba4',50);
            $table->string('namaklub',50);
            $table->time('waktusebelum');
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