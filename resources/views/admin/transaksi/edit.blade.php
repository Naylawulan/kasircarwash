@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">EDIT TRANSAKSI</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/transaksi/{{$transaksi->id}}/update" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
              
                  <div class="form-group">
                    <label for="idpelanggan">NAMA PELANGGAN</label>
                    <input type="text" class="form-control" name="idpelanggan" id="exampleInputEmail1" placeholder="Nama Pelanggan" value="{{$transaksi->idpelanggan}}">
                  </div>
                  
                  <div class="form-floating">
                    <label for="idkasir">NAMA KASIR</label>
                    <input type="text" class="form-control" name="idkasir" id="exampleInputEmail1" placeholder="Nama Kasir" value="{{$transaksi->idkasir}}">
                  </div>
                 
                  <div class="form-group">
                  <label for="idkategori">KATEGORI</label>
                  <input type="text" class="form-control" name="idkategori" id="exampleInputEmail1" placeholder="idkategori" value="{{$transaksi->idkategori}}">
                  </div>
                  
                  <div class="form-group">
                  <label for="plat_nomer">PLAT NOMER</label>
                  <input type="number" class="form-control" name="plat_nomer" id="exampleInputEmail1" placeholder="plat_nomer" value="{{$transaksi->plat_nomer}}">
                  </div>

                  <div class="form-group">
                  <label for="total_bayar">TOTAL BAYAR</label>
                  <input type="number" class="form-control" name="total_bayar" id="exampleInputEmail1" placeholder="total_bayar" value="{{$transaksi->total_bayar}}">
                  </div>

                  <div class="form-group">
                  <label for="tanggal">TANGGAL</label>
                  <input type="date" class="form-control" name="tanggal" id="exampleInputEmail1" placeholder="tanggal" value="{{$transaksi->tanggal}}">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Update</button>
                  </div>
</div>
              </form>
            </div>
</div> 
@endsection