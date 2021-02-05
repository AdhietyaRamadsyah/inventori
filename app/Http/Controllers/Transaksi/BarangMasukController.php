<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangMasukController extends Controller
{
    public function create(){
        return view('transaksi.create');
    }
    
}