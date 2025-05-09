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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number');
            $table->string('type');
            $table->decimal('price_per_night', 8, 2);
<<<<<<< HEAD
            $table->enum('status', ['Available', 'Reserved'])->default('Available');
            $table->boolean('archived_stat')->default(0);
=======
            $table->enum('status', ['Available', 'Occupied'])->default('Available');
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
