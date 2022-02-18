<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->decimal('price');
            $table->string('city', 200);
            $table->string('address', 200);
            $table->string('number', 10);
            $table->string('description');
            $table->string('owner', 150);
            $table->date('start_date');
            $table->timestamps(); //crea queste due colonne created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
