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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->unsignedBigInteger('id_kategori');
            $table->string('gambar_1');
            $table->string('gambar_2');
            $table->string('gambar_3');
            $table->string('gambar_4');
            $table->string('gambar_5');
            $table->text('deskripsi_1');
            $table->text('deskripsi_2')->nullable();
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
