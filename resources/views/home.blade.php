@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Selamat Datang Pada Aplikasi Kasir Sederhana') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Anda telah berhasil login!') }}

                    <p></p>

                    <p>Pada aplikasi ini, Anda dapat menambahkan produk yang dijual dengan informasi seperti deskripsi, harga, jumlah stok, tipe, dan gambar. Produk dapat diperbarui atau dihapus setelah ditambahkan.</p>

                    <p>Selain itu, terdapat fitur kasir yang memungkinkan Anda untuk melakukan pembayaran barang serta melihat laporan transaksi yang telah dilakukan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
