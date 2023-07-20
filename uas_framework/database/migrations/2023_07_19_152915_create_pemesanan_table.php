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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->BigIncrements('id_pemesanan');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_makanan');
            $table->unsignedBigInteger('id_minuman');
            $table->date('tgl_pemesanan');
            $table->timestamps();

            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_makanan')->references('id_makanan')->on('makanan');
            $table->foreign('id_minuman')->references('id_minuman')->on('minuman');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
