<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'jenis',
    ];

    protected $keyType = 'char';
    public $incrementing = false;
    protected $primaryKey = 'id';

    // Relasi ke tabel transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'account_id', 'id');
    }

    // Fungsi untuk membuat ID akun secara otomatis
    protected static function booted()
    {
        static::creating(function ($account) {
            $account->id = self::generateAccountId();
        });
    }

    // Fungsi untuk menghasilkan ID akun secara otomatis
    protected static function generateAccountId()
    {
        // Menghasilkan nomor acak 16 digit
        $randomNumber = mt_rand(1000000000000000, 9999999999999999);

        return  $randomNumber;
    }
}
