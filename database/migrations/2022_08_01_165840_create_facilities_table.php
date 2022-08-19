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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();

            $table->enum('fillingAs', ['', 'individual', 'group'])->nullable();
            $table->string('groupName', 128)->nullable();
            $table->string('firstName', 64)->nullable();
            $table->string('middleName', 64)->nullable();
            $table->string('lastName', 64)->nullable();

            $table->string('street', 128)->nullable();
            $table->string('streetExtended', 128)->nullable();
            $table->string('city', 64)->nullable();
            $table->string('state', 64)->nullable();
            $table->string('zip', 64)->nullable();
            $table->string('country', 64)->nullable();

            $table->string('payToStreet', 128)->nullable();
            $table->string('payToStreetExtended', 128)->nullable();
            $table->string('payToCity', 64)->nullable();
            $table->string('payToState', 64)->nullable();
            $table->string('payToZip', 64)->nullable();
            $table->string('payToCountry', 64)->nullable();

            $table->string('phone', 24)->nullable();
            $table->string('fax', 24)->nullable();
            $table->string('email', 128)->nullable();
            $table->string('website', 128)->nullable();

            $table->boolean('serviceLocation')->default(false);
            $table->boolean('billingLocation')->default(false);
            $table->boolean('primaryBusinessEntity')->default(false);
            $table->boolean('referenceLab')->default(false);
            $table->boolean('acceptsAssigment')->default(false);

            $table->string('prefix')->nullable();
            $table->string('attn', 64)->nullable();
            $table->string('creditCardsAccepted', 64)->nullable();
            $table->string('federalEIN', 64)->nullable();
            $table->string('X12SenderID', 64)->nullable();
            $table->string('domainIdentifier', 64)->nullable();
            $table->string('taxonomy', 16)->default('291U00000X')->nullable();
            $table->string('facilityNPI', 64)->nullable();
            $table->string('taxIDType', 64)->nullable();

            $table->unsignedBigInteger('placeOfServiceID')->nullable();

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
        Schema::dropIfExists('facilities');
    }
};
