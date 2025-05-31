<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori');
            $table->string('produsen');
            $table->integer('stok');
            $table->date('expired_date');
            $table->text('keterangan')->nullable();
            $table->string('foto')->nullable(); // untuk upload gambar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('obats');
    }
};