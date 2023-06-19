<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 20)->unique()->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->unsignedTinyInteger('gender')->default(3);
            $table->tinyInteger('data_birth')->nullable();
            $table->timestamp('phone_verified_at')->nullable()->comment('Дата верификаций');
            $table->dateTime('last_login')->nullable(); //songy kirgen login uagyqy
            $table->integer('login_count')->default(0); // count logins
            $table->dateTime('login_blocked_at')->nullable(); // login block uaqyt
            $table->dateTime('password_changed_at')->nullable(); // last changed password
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
