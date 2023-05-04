<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index',['kategori'=>$kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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
            'jenis_cuci'   => 'required',
            'jenis_mobil' => 'required',
            

        ]);

         Kategori::create([
            'jenis_cuci'   => $request->jenis_cuci,
            'jenis_mobil'  => $request->jenis_mobil,
            
         ]);
         return redirect('/kategori');
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
        $kategori = kategori::find($id); 
        return view('admin.kategori.edit',['kategori'=>$kategori]);
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
            'jenis_cuci'   => 'required',
            'jenis_mobil' => 'required',
            
        ]);
        //$kategori = kategori::find($id);
        //$kategori->jenis_cuci   = $request->jenis_cuci;
        //$kategori->jenis_mobil = $request->jenis_mobil;
      

       // $kategori->save();
       $kategori = Kategori::find($id);
       $kategori->update($request->all());

       return redirect('/kategori');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::find($id);
        $kategori->delete();

        return redirect() -> back();
    }
    public function search(Request $request){
        if ($request->has('search')){
            $kategori = Kategori::where('jenis_cuci','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $kategori = Kategori::all();
        }

        return view('admin.kategori.index',['kategori' => $kategori]);
    }
}
