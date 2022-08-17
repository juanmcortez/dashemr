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
        Schema::create('referrings', function (Blueprint $table) {
            $table->id();

            $table->string('title', 64)->nullable();

            $table->string('firstName', 64)->default('N');
            $table->string('middleName', 64)->nullable();
            $table->string('lastName', 64)->default('N');

            $table->boolean('authorized')->default(false)->comment('Referring doctors are always un-authorized');

            $table->string('npi', 16)->nullable();
            $table->string('upin', 16)->nullable();
            $table->string('claimAs', 16)->nullable();

            $table->string('taxonomy', 16)->default('207Q00000X')->nullable();
            $table->string('stateLicenseNumber', 16)->nullable();
            $table->string('federalTaxID', 16)->nullable();
            $table->string('federalDrugID', 16)->nullable();

            $table->string('specialty', 64)->nullable();
            $table->string('billName', 64)->nullable();
            $table->mediumText('info')->nullable();
            $table->mediumText('notes')->nullable();

            $table->string('assistant', 128)->nullable();
            $table->string('organization', 128)->nullable();
            $table->string('valedictory', 128)->nullable();

            $table->string('street', 128)->nullable();
            $table->string('streetExtended', 128)->nullable();
            $table->string('city', 64)->nullable();
            $table->string('state', 64)->nullable();
            $table->string('zip', 64)->nullable();
            $table->string('country', 64)->nullable();

            $table->string('street2', 128)->nullable();
            $table->string('streetExtended2', 128)->nullable();
            $table->string('city2', 64)->nullable();
            $table->string('state2', 64)->nullable();
            $table->string('zip2', 64)->nullable();
            $table->string('country2', 64)->nullable();

            $table->string('email', 128)->nullable();
            $table->string('website', 128)->nullable();
            $table->string('phone', 16)->nullable();
            $table->string('cellphone', 16)->nullable();
            $table->string('fax', 16)->nullable();
            $table->string('workPhone1', 16)->nullable();
            $table->string('workPhone2', 16)->nullable();

            $table->unsignedBigInteger('facilityID')->nullable();

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
        Schema::dropIfExists('referrings');
    }
};
