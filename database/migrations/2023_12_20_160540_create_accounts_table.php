<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        // Tambahkan pengecekan sebelum membuat tabel
        if (!Schema::hasTable('accounts')) {
            Schema::create('accounts', function (Blueprint $table) {
                $table->bigIncrements('id'); // Kolom 'id' menjadi auto-increment
                $table->string('nama');
                $table->enum('jenis', ['Personal', 'Bisnis']);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        // Tambahkan pengecekan sebelum menghapus tabel
        if (Schema::hasTable('accounts')) {
            Schema::dropIfExists('accounts');
        }
    }
}
