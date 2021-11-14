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
            $table->string('name', 50);
            $table->string('destination_city', 50);
            $table->string('destination_country', 50);
            $table->string('accomodation', 50);
            $table->float('price', 8, 2, false);
            $table->tinyInteger('travel_days')->unsigned();
            $table->dateTime('date_departure', 0);
            $table->dateTime('date_return', 0);
            $table->string('airline_company', 50);
            $table->string('participants', 10);
            $table->boolean('is_available')->default(1);
            $table->text('description')->nullable();
            $table->string('slug', 100);
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
