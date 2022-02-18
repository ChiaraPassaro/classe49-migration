<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            //nome
            $table->string('name', 100);
            //cognome
            $table->string('lastname', 100);
            //matricola
            $table->string('code', 12);
            //piva
            $table->string('piva', 11);
            //mobile
            $table->string('mobile', 10);
            //email
            $table->string('email', 60);
            //address
            $table->string('address');
            //avatar
            $table->string('avatar');
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
        Schema::dropIfExists('agents');
    }
}
