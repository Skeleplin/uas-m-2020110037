@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Form Edit Akun</h1>

                <form action="{{ route('accounts.update', ['account' => $account->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Akun</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $account->nama }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Akun</label>
                        <select class="form-select" id="jenis" name="jenis" required>
                            <option value="Personal" {{ $account->jenis === 'Personal' ? 'selected' : '' }}>Personal</option>
                            <option value="Bisnis" {{ $account->jenis === 'Bisnis' ? 'selected' : '' }}>Bisnis</option>
                        </select>
                    </div>
                    <a href="{{ url('/accounts') }}" class="btn btn-danger ms-2"><i class="fas fa-times"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Update Akun</button>
                </form>
            </div>
        </div>
    </div>
@endsection
