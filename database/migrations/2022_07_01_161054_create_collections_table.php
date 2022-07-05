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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('amount');
            $table->enum('type', ['multa', 'cuota']);
            $table->enum('status', [0, 1])->default(0); // 0:Pendiente, 1:Cobrado
            $table->unsignedBigInteger('assistence_id')->nullable(false);
            $table->foreign('assistence_id')->references('id')->on('assistences')->onDelete('cascade');
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
        Schema::dropIfExists('collections');
    }
};
