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
        Schema::create('charges', function (Blueprint $table) {
            $table->id('charge');

            $table->unsignedBigInteger('encounter');
            $table->foreign('encounter')->references('encounter')->on('encounters');

            $table->enum('codeType', ['CPT4', 'HCPCS', 'ANES', 'CVX', ''])->default('CPT4')->nullable();
            $table->string('code', 8)->default('99213');
            $table->string('codeText', 128)->nullable();

            $table->decimal('fee', 6, 2)->default(0);
            $table->decimal('copay', 6, 2)->default(0);
            $table->integer('units')->default(1);

            $table->string('modifier', 64)->nullable();
            $table->text('ICDitems')->nullable();

            $table->text('noteCodes')->nullable();

            $table->string('custom1', 64)->nullable();
            $table->string('custom2', 64)->nullable();
            $table->string('custom3', 64)->nullable();
            $table->string('custom4', 64)->nullable();
            $table->string('custom5', 64)->nullable();

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
        Schema::dropIfExists('charges');
    }
};
