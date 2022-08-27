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
        Schema::create('options', function (Blueprint $table) {
            $table->id();

            $table->enum('listType', ['', 'checklist', 'checkitem', 'optionlist', 'optionitem', 'selectlist', 'selectoption', 'list', 'listitem'])->nullable()->default('list');

            $table->string('listName', 64)->nullable();
            $table->string('listID', 64)->nullable();

            $table->string('listIDPar', 64)->nullable();
            $table->string('itemDescr', 64)->nullable();
            $table->string('itemValue', 64)->nullable();

            $table->integer('itemOrder')->default(1);
            $table->boolean('isDefault')->default(false);

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
        Schema::dropIfExists('options');
    }
};
