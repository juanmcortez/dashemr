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
        Schema::create('special_codes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('charge');
            $table->foreign('charge')->references('charge')->on('charges');

            $table->string('NDCvalue', 32)->nullable();
            $table->integer('NDCquantity')->nullable();
            $table->enum('NDCtype', ['ML', 'Grams', 'Miligrams', 'I.U.', 'Units'])->default('ML');

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
        Schema::dropIfExists('special_codes');
    }
};
