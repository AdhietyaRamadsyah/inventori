@extends('layouts.cetak')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <P>
                <b>
                    <h3>Inventori
                        <br>
                        Jl..................
                    </h3>
                    <hr>
                </b>
            </P>
        </div>

        @if (request('tgl_awal'))
        <small>dari tanggal {{ request('tgl_awal') }}
            sampai tanggal {{ request('tgl_akhir') }}
        </small>
        @endif

        <u>
            <h4>Laporan Barang masuk</h4>
        </u>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Suplier</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($barang as $get)
                <tr>
                    <td>{{$get->suplier->name}}</td>
                    <td>{{$get->kode_barang}}</td>
                    <td>{{$get->nama_barang}}</td>
                    <td>{{$get->quantity}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">Data tidak ditemukan</td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection