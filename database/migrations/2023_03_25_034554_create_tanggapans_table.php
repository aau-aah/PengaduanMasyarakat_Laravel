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
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->integer('id_tanggapan', 11)->unsigned(false)->autoIncrement(false)->primary();
            $table->integer('id_pengaduan');
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduan');
            $table->dateTime('tgl_tanggapan');
            $table->text('tanggapan');
            $table->string('foto');
            $table->integer('id_petugas');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};
