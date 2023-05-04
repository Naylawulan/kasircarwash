<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "Transaksi";
    protected $fillable = ['idpelanggan','idkasir', 'idkategori', 'plat_nomer', 'total_bayar', 'tanggal'];

    
    public function pelanggan(){
        return $this->belongsTo('App\Models\Pelanggan','idpelanggan');
    }

    public function kasir(){
        return $this->belongsTo('App\Models\Kasir','idkasir');
    }

    public function kategori(){
        return $this->belongsTo('App\Models\Kategori','idkategori');
    }
}
