@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA KATEGORI</h3>

                <div class="card-tools">
                  <form action="/kategori/search" class="form-inline" method="GET">
                    <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama">


                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Jenis_Cuci</th>
                      <th>Jenis_Mobil</th>
                      <th>Opsi</th>
                      <th><a href="/kategori/create" class="btn btn-primary">Tambah</a></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kategori as $kategori)

                     <tr>
                      <td>{{$kategori->jenis_cuci}}</td>
                      <td>{{$kategori->jenis_mobil}}</td>
                      <td> <a href="/kategori/{{$kategori->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus? {{$kategori->nama}} ');"> Hapus </a>
                      <a href="/kategori/{{$kategori->id}}/edit" class="btn btn-warning">Edit</a></td>
                    <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection
</div>