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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->foreignId('room_id');
            $table->string('name');
            $table->string('phone');
=======
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->decimal('total_payment', 10, 2)->nullable();
            $table->string('payment_status')->default('Pending');
<<<<<<< HEAD

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
=======
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
