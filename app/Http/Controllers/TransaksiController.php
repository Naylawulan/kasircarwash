<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use PDF;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $transaksi = Transaksi::with('pelanggan', 'kasir', 'kategori')->get();
        // dd($pembayaran);
        return view('admin.transaksi.index', ['transaksi'=>$transaksi]);
    }

    public function downloadpdf(){
        $transaksi = Transaksi::all();
        $pdf = PDF::loadview('admin.transaksi.export', ['transaksi' => $transaksi])->setOptions(['defaultFont'=>'sans-serif']);
        return $pdf -> download('laporan.transaksi.pdf');
        }

        public function cetakStruk(Transaksi $transaksi){
            $transaksi = collect ([$transaksi]);
            $pdf = PDF::loadview('admin.transaksi.export', ['transaksi' => $transaksi])->setOptions(['defaultFont'=>'sans-serif']);
            return $pdf -> download('laporan.transaksi.pdf');
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transaksi.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'idpelanggan'   => 'required',
            'idkasir' => 'required',
            'idkategori'     => 'required',
            'plat_nomer'=> 'required',
            'total_bayar'     => 'required',
            'tanggal'     => 'required'
        ]);

         Transaksi::create([
            'idpelanggan'   => $request->idpelanggan,
            'idkasir'       => $request->idkasir,
            'idkategori'    => $request->idkategori,
            'plat_nomer'    => $request->plat_nomer,
            'total_bayar'   => $request->total_bayar,
            'tanggal'       => $request->tanggal,
         ]);
         return redirect('/transaksi');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = transaksi::find($id); 
        return view('admin.transaksi.edit',['transaksi'=>$transaksi]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'idpelanggan'   => 'required',
            'idkasir'       => 'required',
            'idkategori'    => 'required',
            'plat_nomer'    => 'required',
            'total_bayar'   => 'required',
            'tanggal'       => 'required'

        ]);

         $transaksi = transaksi::find($id);
         $transaksi->idpelanggan   = $request->idpelanggan;
         $transaksi->idkasir = $request->idkasir;
         $transaksi->idkategori    = $request->idkategori;
         $transaksi->plat_nomer    = $request->plat_nomer;
         $transaksi->total_bayar    = $request->total_bayar;
         $transaksi->tanggal    = $request->tanggal;

       $transaksi->update();

       

       return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::find($id);
        $transaksi->delete();

        return redirect() -> back();
    }

    public function search(Request $request)
    {
        if ($request->has('search')){
            $transaksi = transaksi::where('total_bayar','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $transaksi = transaksi::all();
        }

        return view('admin.transaksi.index',['transaksi' => $transaksi]);

    }

     //public function pelanggan(){
        //$pelanggan = Pelanggan::all();
        //return view ('admin.pembayaran.index', ['pelanggan' =>$pelanggan]);
     //}

     

}   