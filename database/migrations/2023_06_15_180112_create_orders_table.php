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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->restrictOnDelete();
            $table->foreignId('courier_id')->constrained()->restrictOnDelete();
            $table->foreignId('city_id')->constrained()->restrictOnDelete();
            $table->unsignedDouble('amount')->comment('Итого');
            $table->unsignedDouble('retrieve_bonus')->comment('Бонус')->default(0);
            $table->tinyInteger('days_count')->comment('Количество дней');
            $table->tinyInteger('status')->comment('Статус');
            $table->datetime('ordered_at')->comment('Дата заказа');
            $table->datetime('declined_at')->comment('Дата отказа')->nullable();
            $table->datetime('confirmed_at')->comment('Дата подтверждения')->nullable();
            $table->datetime('delivered_at')->comment('Дата доставки')->nullable();
            $table->datetime('completed_at')->comment('Дата завершения')->nullable();
            $table->datetime('retrieved_at')->comment('Дата получения')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
