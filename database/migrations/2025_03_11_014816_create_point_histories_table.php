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
        Schema::create('point_histories', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('stockist_id')->nullable();
            $table->bigInteger('points')->nullable();
            $table->bigInteger('running')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('point_histories');
    }
};
