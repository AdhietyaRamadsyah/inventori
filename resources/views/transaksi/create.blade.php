@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('transaksi.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <select name="barang_id" id="" class="form-control">
                                <option value="">Pilih Barang</option>
                                @foreach($barangs as $barang)
                                <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Suplier</label>
                            <select name="suplier_id" id="" class="form-control">
                                <option value="">Pilih Suplier</option>
                                @foreach($supliers as $suplier)
                                <option value="{{$suplier->id}}">{{$suplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity"> Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-outline-info btn-block">Simpan</button>
                            </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div 
@endsection