<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationsTable extends Migration
{
    public function up(): void
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->id();
            $table->string('code', 4);
            $table->string('description')->nullable();
            $table->enum('status', ['used', 'not_used'])->default('not_used')->index();
            $table->string('verifiable_type')->index();
            $table->unsignedBigInteger('verifiable_id')->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('verifications');
    }
}
