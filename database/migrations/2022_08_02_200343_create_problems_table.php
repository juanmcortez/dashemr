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
        Schema::create('problems', function (Blueprint $table) {
            $table->foreignId('encounter')->constrained('encounters', 'encounter');

            $table->dateTime('conditionOriginatedDate')->nullable();
            $table->dateTime('firstConsultedDate')->nullable();
            $table->dateTime('lastSeenDate')->nullable();
            $table->dateTime('acuteManifestationDate')->nullable();
            $table->dateTime('lastXRayDate')->nullable();
            $table->enum('illnessAccidentPregnancy', ['Illness', 'Accident', 'Pregnancy', ''])->nullable();
            $table->string('autoAccidentState', 64)->nullable();
            $table->dateTime('accidentDate')->nullable();
            $table->boolean('employmentRelated')->default(false);

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
        Schema::dropIfExists('problems');
    }
};
