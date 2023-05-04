<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasir = Kasir::all();
        return view('admin.kasir.index',['kasir'=>$kasir]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kasir.create');
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
            'email'   => 'required',
            'password'   => 'required',
            'nama'   => 'required',
            'alamat' => 'required',
            'no_hp'  => 'required',

        ]);

         Kasir::create([
            'email'    => $request->email,
            'password'    => $request->password,
            'nama'    => $request->nama,
            'alamat'  => $request->alamat,
            'no_hp'   => $request->no_hp,
         ]);
         
         return redirect('/kasir');
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
        $kasir = Kasir::find($id); 
        return view('admin.kasir.edit',['kasir'=>$kasir]);
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
            'email'   => 'required',
            'password'   => 'required',
            'nama'   => 'required',
            'alamat' => 'required',
            'no_hp'     => 'required'
            
        ]);
        //     $kasir->email   = $request->email;
        //     $kasir->npassword   = $request->password;
    //     $kasir->nama   = $request->nama;
    //     $kasir->alamat = $request->alamat;
    //    $kasir->no_hp   = $request->no_hp;


       //$kasir->save();

    $id = Kasir::find($id);
    $id->update($request->all());

    // $kasir = Kasir::find($id);
    return redirect('/kasir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasir = kasir::find($id);
        $kasir->delete();

        return redirect() -> back();
    }
    public function search(Request $request){
        if ($request->has('search')){
            $kasir = Kasir::where('nama','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $kasir = Kasir::all();
        }

        return view('admin.kasir.index',['kasir' => $kasir]);
    }
}
