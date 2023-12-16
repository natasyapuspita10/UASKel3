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
        Schema::create('wisata_benefits', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('wisata_id')->constrained();
            // $table->string('name');
            // $table->timestamps();

            $table->id();
            $table->unsignedBigInteger('wisata_id'); // Kolom yang akan dijadikan kunci asing
            $table->string('name');
            $table->timestamps();
            
            // Menambahkan kunci asing
            $table->foreign('wisata_id')->references('id')->on('wisata');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata_benefits');
    }
};
