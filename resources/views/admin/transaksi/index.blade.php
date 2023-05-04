@extends('layouts.admin')

@section('content')


<div class="content">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA TRANSAKSI</h3> &nbsp;
                <a href="{{url('/downloadpdf')}}" target="_blank" class="btn btn-info btn-md">Cetak Laporan</a>

                <div class="card-tools">
                  <form action="/transaksi/search" class="form-inline" method="GET">
                    <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Pelanggan</th>
                      <th>Kasir</th>
                      <th>Kategori</th>
                      <th>PlatNomer</th>
                      <th>TotalBayar</th>
                      <th>Tanggal</th>
                      <th>Opsi</th>
                      <th><a href="/transaksi/create" class="btn btn-primary">Tambah</a></th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   
                  @foreach ($transaksi as $wulan)

                     <tr>
                      <td>{{$wulan->pelanggan->nama}}</td>
                      <td>{{$wulan->kasir->nama}}</td>
                      <td>{{$wulan->kategori->jenis_cuci}}</td>
                      <td>{{$wulan->plat_nomer}}</td>
                      <td>{{$wulan->total_bayar}}</td>
                      <td>{{$wulan->tanggal}}</td>
                      <td> <a href="/transaksi/{{$wulan->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus? {{$wulan->nama}} ');"> Hapus </a>
                      <a href="/transaksi/{{$wulan->id}}/edit" class="btn btn-warning">Edit</a></td>
                      <td> <a href="/transaksi/{{$wulan->id}}/cetakstruk" class="btn btn-success" onclick="return confirm('Apakah Yakin Mencetak Struk? {{$wulan->nama}} ');"> Cetak Struk </a>
                    <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div> 
@endsection         