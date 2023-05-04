@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">EDIT KATEGORI</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kategori/{{$kategori->id}}/update" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="nama">JENIS_CUCI</label>
                    <input type="text" class="form-control" name="jenis_cuci" id="exampleInputEmail1" placeholder="jenis_cuci" value="{{$kategori->jenis_cuci}}">
                  </div>
                  
                  <div class="form-floating">
                    <label for="alamat">JENIS_MOBIL</label>
                    <input type="text" class="form-control" name="jenis_mobil" id="exampleInputEmail1" placeholder="jenis_mobil" value="{{$kategori->jenis_mobil}}">
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