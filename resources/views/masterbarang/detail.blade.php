@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h4></h4>
                    <p></p>
                    <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <td>Kode Barang</td>
                                <td>{{$barang->kode_barang}}</td>
                            </tr>
                            <tr>
                                <td>Nama Barang</td>
                                <td>{{$barang->nama_barang}}</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>{{$barang->quantity}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{$barang->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection