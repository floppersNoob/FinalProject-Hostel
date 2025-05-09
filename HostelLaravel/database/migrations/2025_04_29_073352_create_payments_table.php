<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
<<<<<<< HEAD
=======
    /**
     * Run the migrations.
     */
    // Migration for payments table
// Migration for payments table
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
public function up()
{
    Schema::create('payments', function (Blueprint $table) {
        $table->id();
<<<<<<< HEAD
        $table->foreignId('customer_id');
=======
        $table->foreignId('customer_id')->constrained()->onDelete('cascade');
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
        $table->decimal('amount_paid', 10, 2);
        $table->string('payment_method');
        $table->date('payment_date');
        $table->enum('status', ['Pending', 'Approved'])->default('Pending');
<<<<<<< HEAD

        $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('payments');
    }
};
