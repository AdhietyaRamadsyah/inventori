<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use App\Suplier;

class BarangMasukController extends Controller
{
    public function create()
    {
        $data = [
            'barangs' => Barang::all(),
            'supliers' => Suplier::all(),
        ];
        return view('transaksi.create', $data);
    }
    
}