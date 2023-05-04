@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">TAMBAH KASIR</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/kasir/store')}}" method="POST">
              {{csrf_field()}}
              <div class="card-body">

              <div class="form-group">
                    <label for="nama">EMAIL</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="nama">PASSWORD</label>
                    <input type="text" class="form-control" name="password" id="exampleInputEmail1" placeholder="Password">
                  </div>
              
                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama">
                  </div>
                  
                  <div class="form-floating">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="Alamat">
                  </div>

                  <div class="form-group">
                  <label for="hp">NO_HP</label>
                  <input type="number" name="no_hp" class="form-control" placeholder="+62"> 
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
</div>
@endsection