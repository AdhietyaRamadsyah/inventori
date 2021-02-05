<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use App\Suplier;
use App\Transaction;

class TransaksiController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('barang', 'suplier')->get();
        return view('transaksi.index', compact('transactions'));
    }
}
