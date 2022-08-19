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
        Schema::create('demographics', function (Blueprint $table) {
            $table->id('pid');
            $table->foreign('pid')->references('pid')->on('patients');

            $table->enum('title', ['unassigned', 'mr', 'mrs', 'Mrs.', 'ms', 'dr', 'other', ''])->nullable();

            $table->string('firstName', 64)->default('N');
            $table->string('middleName', 64)->nullable();
            $table->string('lastName', 64)->default('N');

            $table->date('dateOfBirth')->default(now());
            $table->enum('genre', ['male', 'female', 'undisclosed', 'other', ''])->default('undisclosed');

            $table->string('socialSecurityNumber', 24)->nullable();
            $table->string('driverLicenseNumber', 24)->nullable();

            $table->string('street', 128)->nullable();
            $table->string('streetExtended', 128)->nullable();
            $table->string('city', 64)->nullable();
            $table->string('state', 64)->nullable();
            $table->string('zip', 64)->nullable();
            $table->string('country', 64)->nullable();

            $table->string('homePhone', 24)->default('000 000-0000');
            $table->string('cellPhone', 24)->nullable();
            $table->string('emailAddress', 128)->nullable();

            $table->enum('civilStatus', ['unassigned', 'single', 'married', 'divorced', 'widowed', 'separated', 'domesticPartner', 'other', ''])->nullable();;

            $table->string('language', 2)->default('en');
            $table->string('ethnicity', 16)->default('unassigned');
            $table->string('race', 16)->default('unassigned');

            $table->date('dateDeceased')->nullable();
            $table->string('reasonDeceased', 128)->nullable();

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
        Schema::dropIfExists('demographics');
    }
};
