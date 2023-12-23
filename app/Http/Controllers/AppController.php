<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transaction;

class AppController extends Controller
{
    public function index()
    {
        $jumlahAkun = Account::count();
        $jumlahTransaksi = Transaction::count();

        return view('index', compact('jumlahAkun', 'jumlahTransaksi'));
    }
}
