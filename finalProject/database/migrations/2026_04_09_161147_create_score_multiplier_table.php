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
        Schema::create('score_multiplier', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Multiplier::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\MultiplierCost::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('score_multiplier');
    }
};
