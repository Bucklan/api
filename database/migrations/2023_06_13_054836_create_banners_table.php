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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->foreignId('city_id')->nullable()->constrained()->restrictOnDelete();
            $table->unsignedBigInteger('position')->nullable()->index()->comment('Позиция');
            $table->string('link', 500)->comment('Ссылки')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
