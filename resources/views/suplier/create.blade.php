@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card  ">
                <div class="card-body">
                    <form action="{{route('suplier.store')}}" method="post">

                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Nama Suplier</label>
                            <input type="text" name="name" id="nama_barang" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-outline-info btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection