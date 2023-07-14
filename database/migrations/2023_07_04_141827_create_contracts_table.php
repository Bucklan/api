<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')
                ->constrained()
                ->restrictOnDelete();
            $table->string('contact_telegram')->nullable();
            $table->string('contact_whatsapp')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
