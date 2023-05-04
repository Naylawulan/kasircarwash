@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">TAMBAH TRANSAKSI</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/transaksi/store')}}" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="idpelanggan">NAMA PELANGGAN</label>
                    <input type="text" class="form-control" name="idpelanggan" id="exampleInputEmail1" placeholder="Nama Pelanggan">
                  </div>
                  
                  <div class="form-floating">
                    <label for="idkasir">NAMA KASIR</label>
                    <input type="text" class="form-control" name="idkasir" id="exampleInputEmail1" placeholder="Nama Kasir">
                  </div>
                 
                  <div class="form-group">
                  <label for="idkategori">KATEGORI</label>
                  <input type="text" name="idkategori" class="form-control" placeholder="Nama Kategori"> 
                  </div>

                  <div class="form-group">
                  <label for="plat_nomer">PLAT NOMER</label>
                  <input type="number" name="plat_nomer" class="form-control" placeholder="Plat Nomer"> 
                  </div>
                  
                  <div class="form-group">
                  <label for="total_bayar">TOTAL BAYAR</label>
                  <input type="number" name="total_bayar" class="form-control" placeholder="Total Bayar"> 
                  </div>

                  <div class="form-group">
                  <label for="tanggal">tanggal</label>
                  <input type="date" name="tanggal" class="form-control" placeholder="Tanggal"> 
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
</div>
              </form>
            </div>
</div> 
@endsection