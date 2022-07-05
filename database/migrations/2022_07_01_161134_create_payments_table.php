<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('import');
            $table->date('date');
            $table->longText('observations');
            $table->unsignedBigInteger('collection_id');
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');
            $table->unsignedBigInteger('assistence_id')->nullable(false);
            $table->foreign('assistence_id')->references('id')->on('assistences')->onDelete('cascade');
            $table->unsignedBigInteger('activity_id')->nullable(false);
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
