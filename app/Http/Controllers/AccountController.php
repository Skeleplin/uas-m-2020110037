<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Menampilkan daftar akun.
     */
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    /**
     * Menampilkan formulir untuk membuat akun baru.
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Menyimpan akun baru ke penyimpanan.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jenis' => 'required|in:Personal,Bisnis',
            // Tambahkan validasi sesuai kebutuhan
        ]);

        // Simpan akun baru
        $account = new Account();
        $account->nama = $validatedData['nama'];
        $account->jenis = $validatedData['jenis'];
        // Tambahkan field lain sesuai kebutuhan
        $account->save();

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil ditambahkan.');
    }


    /**
     * Menampilkan detail akun.
     */
    public function show(string $id)
    {
        $account = Account::findOrFail($id);
        return view('accounts.show', compact('account'));
    }

    /**
     * Menampilkan formulir untuk mengedit akun.
     */
    public function edit(string $id)
    {
        $account = Account::findOrFail($id);
        return view('accounts.edit', compact('account'));
    }

    /**
     * Menyimpan perubahan pada akun ke penyimpanan.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'jenis' => 'required|in:Personal,Bisnis',
            // Tambahkan validasi sesuai kebutuhan
        ]);

        // Perbarui akun
        $account = Account::findOrFail($id);
        $account->update([
            'nama' => $request->input('nama'),
            'jenis' => $request->input('jenis'),
            // Tambahkan field lain sesuai kebutuhan
        ]);

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil diperbarui.');
    }

    /**
     * Menghapus akun dari penyimpanan.
     */
    public function destroy(string $id)
    {
        $account = Account::findOrFail($id);
        $account->delete();

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil dihapus.');
    }
}
