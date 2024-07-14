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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id')->nullable();
            $table->bigInteger('user_id');
            $table->decimal('total')->default(0);
            $table->bigInteger('quantity')->default(0);
            $table->bigInteger('points')->default(0);
            $table->string('payment_method')->default('cash');
            $table->string('status')->default('pending');
            $table->json('items')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
