<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('car_id');
            $table->string('rezlocation');
            $table->date('rezdate');
            $table->string('reztime');
            $table->date('returndate');
            $table->string('returnlocation');
            $table->integer('days');
            $table->integer('price');
            $table->integer('amount');
            $table->string('ip', 20)->nullable();
            $table->string('note', 250)->nullable();
            $table->string('status', 10)->default('Pending');
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
        Schema::dropIfExists('reservations');
    }
};
