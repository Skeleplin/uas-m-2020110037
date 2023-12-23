<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'nominal',
        'tujuan',
        'account_id',
    ];


    // Relasi ke tabel accounts
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
