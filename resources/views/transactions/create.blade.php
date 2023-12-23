@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Form Tambah Transaksi</h1>

            <form action="{{ route('transactions.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="account_id" class="form-label">Pilih Akun</label>
                    <select class="form-select" id="account_id" name="account_id" required>
                        <option value="" selected disabled>Pilih Akun</option>
                        @foreach($accounts as $account)
                            <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="number" class="form-control" id="nominal" name="nominal" required>
                </div>

                <div class="mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <select class="form-select" id="tujuan" name="tujuan" required>
                        <option value="" selected disabled>Pilih Tujuan</option>
                        @foreach($accounts as $account)
                            <option value="{{ $account->nama }}">{{ $account->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori" required>
                        <option value="" selected disabled>Pilih Kategori</option>
                        <option value="Pemindahan Dana">Pemindahan Dana</option>
                        <option value="Investasi">Investasi</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <a href="{{ url('/transactions') }}" class="btn btn-danger ms-2"><i class="fas fa-times"></i> Kembali</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Tambah Transaksi</button>
            </form>
        </div>
    </div>
</div>
@endsection
