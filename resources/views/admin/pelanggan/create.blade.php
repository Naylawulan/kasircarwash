@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">TAMBAH PELANGGAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/pelanggan/store')}}" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama">
                  </div>
                  
                  <div class="form-floating">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="Alamat">
                  </div>
                 
                  <div class="form-group">
                  <label for="hp">HP</label>
                  <input type="number" name="hp" class="form-control" placeholder="+62"> 
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