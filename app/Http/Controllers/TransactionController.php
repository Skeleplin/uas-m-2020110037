<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Account;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        $accounts = Account::all();
        return view('transactions.create', compact('accounts'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'kategori' => 'required|string',
            'nominal' => 'required|numeric',
            'tujuan' => 'required|string',
            'account_id' => 'required|string',
        ]);
        // Simpan transaksi baru
        Transaction::create($validatedData);

        // Redirect ke halaman indeks transaksi dengan pesan sukses
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function show($id)
    {
        try {
            $transaction = Transaction::findOrFail($id);
            return view('transactions.show', compact('transaction'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('transactions.index')->with('error', 'Transaksi tidak ditemukan.');
        }
    }


    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transactions.edit', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'account_id' => 'required|string',
            'nominal' => 'required|numeric',
            'tujuan' => 'required|string',
            'kategori' => 'required|string',
        ]);

        // Perbarui data transaksi
        Transaction::findOrFail($id)->update($validatedData);

        // Redirect ke halaman indeks transaksi dengan pesan sukses
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus data transaksi
        Transaction::findOrFail($id)->delete();

        // Redirect ke halaman indeks transaksi dengan pesan sukses
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
