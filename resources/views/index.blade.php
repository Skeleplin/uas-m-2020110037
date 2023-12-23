@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><i class="fas fa-user"></i> Data Akun</h2>
                    <hr>
                    <p class="card-text">Jumlah Data Akun: <strong>{{ $jumlahAkun }}</strong></p>
                    <a href="{{ route('accounts.index') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat Data Akun</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3 mt-md-0">
                <div class="card-body">
                    <h2 class="card-title"><i class="fas fa-exchange-alt"></i> Data Transaksi</h2>
                    <hr>
                    <p class="card-text">Jumlah Data Transaksi: <strong>{{ $jumlahTransaksi }}</strong></p>
                    <a href="{{ route('transactions.index') }}" class="btn btn-success"><i class="fas fa-eye"></i> Lihat Data Transaksi</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Grafik Data Akun & Transaksi</h2>
                    <canvas id="myChart" width="10" height="5"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Skrip untuk membuat grafik
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Data Akun', 'Data Transaksi'],
            datasets: [{
                label: 'Jumlah Data',
                data: [{{ $jumlahAkun }}, {{ $jumlahTransaksi }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(75, 192, 192, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection
