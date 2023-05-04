<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;
use App\Models\Pelanggan;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function dashboard(){
       $kasir = kasir::count();
       $pelanggan = pelanggan::count();
       $kategori = kategori::count();
       $transaksi = Transaksi::count();
       $groupTransaksi = Transaksi::all()->groupBy(function($val){
        return Carbon::parse($val->tanggal)->format('F');
      });
       //dd($groupPembayaran);
       return view('admin.dashboard', compact('kasir', 'pelanggan', 'kategori', 'transaksi', 'groupTransaksi'));
    } 
}
