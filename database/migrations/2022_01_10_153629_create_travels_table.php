<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('description');
            $table->string('place_of_departure')->nullable(false);
            $table->string('place_of_arrival')->nullable(false);
            $table->date('departure_date')->nullable(false);
            $table->date('arrival_date')->nullable(false);
            $table->time('departure_time')->nullable(false);
            $table->time('arrival_time')->nullable(false);
            $table->tinyInteger('travelers_min_number')->default(2);
            $table->tinyInteger('travelers_max_number');
            $table->integer('price_per_traveler')->nullable(false);
            $table->text('notes');
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
        Schema::dropIfExists('travels');
    }
}
