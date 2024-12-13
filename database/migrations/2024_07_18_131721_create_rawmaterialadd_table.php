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
        Schema::create('rawmaterialadd', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('rbrand_id');
            $table->string('prod');
            $table->string('qty_in');
            $table->string('description')->default('No description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawmaterialadd');
    }
};
