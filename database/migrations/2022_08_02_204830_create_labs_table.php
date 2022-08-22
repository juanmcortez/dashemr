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
        Schema::create('labs', function (Blueprint $table) {
            $table->foreignId('encounterLab')->primary()->index()->unique()->constrained('encounters', 'encounter');

            $table->string('accessionNumberLabLevel', 64)->nullable();
            $table->string('salesRepresentative', 64)->nullable();
            $table->string('locationCode', 64)->nullable();
            $table->string('locationName', 64)->nullable();
            $table->string('labUserDefined', 64)->nullable();
            $table->string('referenceLab', 64)->nullable();
            $table->string('panelName', 64)->nullable();
            $table->string('labTestType', 64)->nullable();
            $table->string('billingType', 64)->nullable();

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
        Schema::dropIfExists('labs');
    }
};
