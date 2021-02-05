@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert"> Ini Adalah Data Tranksaksi terakhir </div>
        </div>
    </div>
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2">
                <div class="mr-auto">

                    <a href="{{route('transaksi.barang-masuk')}}" class="btn btn-info mr-2">Tambah Transaksi Masuk</a>
                    <a href="{{route('transaksi.barang-keluar')}}" class="btn btn-danger mr-2">Tambah Transaksi Keluar</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Nama Suplier</th>
                        <th>Kode Barang</th>
                        <th>Tgl Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                    <tr>
                        <td>{{$transaction->kode_transaksi}}</td>
                        <td>{{$transaction->suplier->name}}</td>
                        <td>{{$transaction->barang->nama_barang}}</td>
                        <td>{{$transaction->created_at->toDateString()}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection