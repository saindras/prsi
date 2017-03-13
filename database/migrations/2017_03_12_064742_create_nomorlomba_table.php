<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomorlombaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomorlomba', function (Blueprint $table) {
            $table->increments('idnolomba');
            $table->string('gaya', 50);
            $table->string('jarak', 50);
            $table->char('kelompokumur', 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomorlomba');
    }
}
