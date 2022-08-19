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

            $table->foreignId('pid')->constrained('patients', 'pid');

            $table->dateTime('entryDate')->default(now());
            $table->dateTime('serviceDate')->default(now());
            $table->dateTime('serviceDateTo')->nullable();

            $table->foreignId('facilityID')->nullable()->constrained('facilities', 'id');
            $table->foreignId('billingFacilityID')->nullable()->constrained('facilities', 'id');
            $table->unsignedBigInteger('placeOfServiceID')->nullable();

            $table->enum('sensitivity', ['Normal', 'High', 'None'])->default('Normal');

            $table->dateTime('admisionDate')->nullable();
            $table->dateTime('dischargeDate')->nullable();

            $table->foreignId('renderingProviderID')->nullable()->constrained('renderings', 'id');
            $table->foreignId('referringProviderID')->nullable()->constrained('referrings', 'id');
            $table->foreignId('orderingProviderID')->nullable()->constrained('referrings', 'id');
            $table->foreignId('supervisingProviderID')->nullable()->constrained('referrings', 'id');

            $table->longText('consult')->nullable();
            $table->unsignedBigInteger('authorizationNumberID')->nullable();

            $table->dateTime('updated_at')->default(now());
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
