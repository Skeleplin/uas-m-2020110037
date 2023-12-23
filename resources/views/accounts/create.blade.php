@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Form Tambah Akun</h1>

            {{-- Formulir untuk menambah akun --}}
            <form action="{{ route('accounts.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>

                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis:</label>
                    <select class="form-select" name="jenis" id="jenis" required>
                        <option value="Personal">Personal</option>
                        <option value="Bisnis">Bisnis</option>
                    </select>
                </div>
                <a href="{{ url('/accounts') }}" class="btn btn-danger ms-2"><i class="fas fa-times"></i> Kembali</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Tambah Akun</button>
            </form>
        </div>
    </div>
</div>
@endsection
