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
        Schema::create('rawmaterial', function (Blueprint $table) {
            $table->id();
            $table->string('s_no')->nullable();
            $table->date('date')->nullable();
            $table->string('Title')->nullable();
            $table->string('dscp')->nullable();
            $table->string('d_c')->nullable();
            $table->string('qty_in')->nullable();
            // $table->date('date_out');
            $table->string('qty_out')->nullable();
            $table->string('blc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawmaterial');
    }
};
