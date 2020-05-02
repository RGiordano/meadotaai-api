<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('specie_id');
            $table->unsignedBigInteger('shelter_id');
            $table->unsignedBigInteger('city_id');
            $table->string('name');
            $table->char('sex')->nullable();
            $table->integer('age')->nullable();
            $table->boolean('is_sterilized')->nullable();
            $table->decimal('weight')->nullable();
            $table->unsignedTinyInteger('status')->default(1);
            $table->date('adopted_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('specie_id')
                ->references('id')
                ->on('species')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('shelter_id')
                ->references('id')
                ->on('shelters')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
