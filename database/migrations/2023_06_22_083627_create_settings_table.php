<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('register_count')->nullable()
                ->comment('Количество регистраций для бонуса');
            $table->integer('register_amount')->nullable()
                ->comment('Сумма бонуса за регистрацию');
            $table->integer('order_count')->nullable()
                ->comment('Количество заказов для бонуса');
            $table->integer('order_amount')->nullable()
                ->comment('Сумма бонуса за заказы');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
