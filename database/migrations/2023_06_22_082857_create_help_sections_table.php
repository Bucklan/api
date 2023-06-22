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
        Schema::create('help_sections', function (Blueprint $table) {
            $table->id();
            $table->json('name')->comment('Наименование');
            $table->json('content')->comment('Содержание');
            $table->unsignedBigInteger('position')->nullable()->index()->comment('Позиция');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('help_sections');
    }
};
