@extends('layouts.admin')

@section('content')


<div class="content">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA PELANGGAN</h3>

                <div class="card-tools">
                  <form action="/pelanggan/search" class="form-inline" method="GET">
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
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Hp</th>
                      <th>Opsi</th>
                      <th><a href="/pelanggan/create" class="btn btn-primary">Tambah</a></th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pelanggan as $wulan)

                     <tr>
                      <td>{{$wulan->nama}}</td>
                      <td>{{$wulan->alamat}}</td>
                      <td>{{$wulan->hp}}</td>
                      <td> <a href="/pelanggan/{{$wulan->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus? {{$wulan->nama}} ');"> Hapus </a>
                      <a href="/pelanggan/{{$wulan->id}}/edit" class="btn btn-warning">Edit</a></td>
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