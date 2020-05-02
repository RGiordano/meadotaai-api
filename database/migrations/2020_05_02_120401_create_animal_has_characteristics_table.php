<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalHasCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_has_characteristics', function (Blueprint $table) {
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('characteristic_id');
            $table->primary(['animal_id', 'characteristic_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_has_characteristics');
    }
}
