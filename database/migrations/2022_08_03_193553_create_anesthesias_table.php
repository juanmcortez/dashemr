<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anesthesias', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('charge');
            $table->foreign('charge')->references('charge')->on('charges');

            $table->timestamp('anesthesiaStartTime')->nullable();
            $table->timestamp('anesthesiaStopTime')->nullable();
            $table->timestamp('anesthesiaLapseTime')->nullable();
            $table->integer('anesthesiaTimeUnits')->default(0)->nullable();
            $table->integer('anesthesiaBaseUnits')->default(0)->nullable();
            $table->float('anesthesiaUnitCharge', 8, 2)->default(0)->nullable();
            $table->string('anesthesiaM1')->nullable();
            $table->string('anesthesiaM2')->nullable();
            $table->string('anesthesiaInfusion')->nullable();
            $table->float('anesthesiaBasicValue', 8, 2)->default(0)->nullable();
            $table->integer('anesthesiaModifierUnits')->default(0)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anesthesias');
    }
};
