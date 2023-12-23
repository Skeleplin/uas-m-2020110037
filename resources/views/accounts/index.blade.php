@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><i class="fas fa-user"></i> Data Akun</h1>
            <hr>
            <a href="{{ route('accounts.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Akun</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($accounts as $account)
                        <tr>
                            <td>{{ $account->id }}</td>
                            <td>{{ $account->nama }}</td>
                            <td>{{ $account->jenis }}</td>
                            <td>{{ $account->created_at }}</td>
                            <td>{{ $account->updated_at }}</td>
                            <td>
                                <a href="{{ route('accounts.edit', ['account' => $account->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('accounts.destroy', ['account' => $account->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url('/') }}" class="btn btn-danger mb-3"><i class="fas fa-times"></i> Kembali</a>
        </div>
    </div>
</div>
@endsection
