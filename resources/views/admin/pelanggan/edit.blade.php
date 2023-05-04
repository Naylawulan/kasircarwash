@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">EDIT PELANGGAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pelanggan/{{$pelanggan->id}}/update" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama" value="{{$pelanggan->nama}}">
                  </div>
                  
                  <div class="form-floating">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="Alamat" value="{{$pelanggan->alamat}}">
                  </div>
                 
                  <div class="form-group">
                  <label for="hp">HP</label>
                  <input type="text" class="form-control" name="hp" id="exampleInputEmail1" placeholder="=62" value="{{$pelanggan->hp}}">
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