<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tentang', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('contact_telp')->nullable();
            $table->text('contact_wa')->nullable();
            $table->text('email')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tentang');
    }
};
