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
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->float('voltage1');
            $table->float('current1');
            $table->float('power1');
            $table->float('energy1');
            $table->float('frequency1');
            $table->float('pf1');
            $table->float('voltage2');
            $table->float('current2');
            $table->float('power2');
            $table->float('energy2');
            $table->float('frequency2');
            $table->float('pf2');
            $table->float('voltage3');
            $table->float('current3');
            $table->float('power3');
            $table->float('energy3');
            $table->float('frequency3');
            $table->float('pf3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};
