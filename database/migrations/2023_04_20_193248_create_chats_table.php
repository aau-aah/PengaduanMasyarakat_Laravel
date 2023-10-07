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
        Schema::create('chats', function (Blueprint $table) {
            $table->integer('id_chat')->unsigned(false)->autoIncrement(false)->primary();
            $table->text('content_chat');
            $table->dateTime('tgl_chat');
            $table->string('foto')->nullable();
            $table->integer('id_pengaduan');
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduan');
            $table->integer('id_petugas')->nullable();
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
            $table->char('nik', 16)->nullable();
            $table->foreign('nik')->references('nik')->on('masyarakat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
