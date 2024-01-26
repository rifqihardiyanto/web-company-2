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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->string('sub_judul')->nullable();
            $table->text('isi_1');
            $table->text('isi_2')->nullable();
            $table->text('isi_3')->nullable();
            $table->string('gambar_1');
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->unsignedBigInteger('id_kategori');
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('categorynews');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
