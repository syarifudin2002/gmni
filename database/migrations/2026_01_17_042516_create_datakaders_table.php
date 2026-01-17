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
        Schema::create('datakaders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // foreign key ke users
            $table->string('nama');
            $table->text('alamat')->nullable();
            $table->string('no_whatsapp', 20);
            $table->string('jurusan')->nullable();
            $table->string('kampus')->nullable();
            $table->string('jenjang_kaderisasi');
            $table->year('tahun_kaderisasi');
            $table->string('asal_dpk');
            $table->string('image')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datakaders');
    }
};
