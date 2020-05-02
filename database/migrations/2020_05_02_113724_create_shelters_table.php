<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('photo_id')->nullable();
            $table->string('name', 150);
            $table->string('address', 255)->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('photo_id')
                ->references('id')
                ->on('photos')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shelters');
    }
}
