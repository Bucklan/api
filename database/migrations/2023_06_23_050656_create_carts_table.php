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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')
                ->constrained()
                ->restrictOnDelete();
            $table->foreignId('client_id')
                ->constrained()
                ->restrictOnDelete();
            $table->foreignId('product_id')
                ->constrained()
                ->restrictOnDelete();
            $table->foreignId('price_id')
                ->constrained('product_prices')
                ->restrictOnDelete();
            $table->integer('quantity')->comment('Количество');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
