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
        Schema::create('tb_datapensiun', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->datetime('tanggal_lahir');
            $table->string('jabatan');
            $table->string('pangkat');
            $table->string('golongan');
            $table->datetime('tanggal_pensiun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_datapensiun');
    }
};
