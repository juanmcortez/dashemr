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
        Schema::create('encounters', function (Blueprint $table) {
            $table->id('encounter');

            $table->unsignedBigInteger('pid');
            $table->foreign('pid')->references('pid')->on('patients');

            $table->dateTime('entryDate')->default(now());
            $table->dateTime('serviceDate')->default(now());
            $table->dateTime('serviceDateTo')->nullable();

            $table->unsignedBigInteger('facilityID')->nullable();
            $table->unsignedBigInteger('billingFacilityID')->nullable();
            $table->unsignedBigInteger('placeOfServiceID')->nullable();
            $table->enum('sensitivity', ['Normal', 'High', 'None'])->default('Normal');

            $table->dateTime('admisionDate')->nullable();
            $table->dateTime('dischargeDate')->nullable();

            $table->unsignedBigInteger('renderingProviderID')->nullable();
            $table->unsignedBigInteger('referringProviderID')->nullable();
            $table->unsignedBigInteger('orderingProviderID')->nullable();
            $table->unsignedBigInteger('supervisingProviderID')->nullable();

            $table->longText('consult')->nullable();
            $table->unsignedBigInteger('authorizationNumberID')->nullable();

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
        Schema::dropIfExists('encounters');
    }
};
