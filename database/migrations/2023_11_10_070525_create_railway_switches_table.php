<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('railway_switches', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('position');
            $table->string('name', 10);
            $table->string('type', 2);
            $table->string('control', 2);
            $table->unsignedBigInteger('station_id');
            $table->foreign('station_id')->references('id')->on('stations');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('railway_switches');
    }
};
