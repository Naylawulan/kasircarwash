@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">EDIT KASIR</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kasir/{{$kasir->id}}/update" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              
              <div class="form-group">
                    <label for="nama">EMAIL</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" value="{{$kasir->email}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="nama">PASSWORD</label>
                    <input type="text" class="form-control" name="password" id="exampleInputEmail1" placeholder="Password" value="{{$kasir->password}}">
                  </div>
                  

                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama" value="{{$kasir->nama}}">
                  </div>
                  
                  <div class="form-floating">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="Alamat" value="{{$kasir->alamat}}">
                  </div>
                 
                  <div class="form-group">
                  <label for="no_hp">NO_HP</label>
                  <input type="text" class="form-control" name="no_hp" id="exampleInputEmail1" placeholder="=+62" value="{{$kasir->no_hp}}">
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