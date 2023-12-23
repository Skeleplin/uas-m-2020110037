<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        // Tambahkan pengecekan sebelum membuat tabel
        if (!Schema::hasTable('transactions')) {
            Schema::create('transactions', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('kategori');
                $table->double('nominal');
                $table->string('tujuan');
                $table->unsignedBigInteger('account_id');
                $table->timestamps();

                // Tambahkan indeks jika diperlukan
                $table->index('account_id');

                $table->foreign('account_id')->references('id')->on('accounts');
            });
        }
    }

    public function down()
    {
        // Tambahkan pengecekan sebelum menghapus tabel
        if (Schema::hasTable('transactions')) {
            Schema::dropIfExists('transactions');
        }
    }
}
