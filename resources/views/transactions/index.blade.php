<!-- resources/views/transactions/index.blade.php -->

@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><i class="fas fa-list"></i> Daftar Transaksi</h1>
            <hr>
            <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Transaksi</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                        <th>Tujuan</th>
                        <th>Account ID</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->kategori }}</td>
                        <td>Rp. {{ $transaction->nominal }}</td>
                        <td>{{ $transaction->tujuan }}</td>
                        <td>{{ $transaction->account_id }}</td>
                        <td>{{ $transaction->created_at }}</td>
                        <td>{{ $transaction->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url('/') }}" class="btn btn-danger mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>
@endsection
