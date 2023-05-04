@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">TAMBAH KATEGORI</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/kategori/store')}}" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="nama">JENIS_CUCI</label>
                    <input type="text" class="form-control" name="jenis_cuci" id="exampleInputEmail1" placeholder="Cuci">
                  </div>
                  
                  <div class="form-floating">
                    <label for="alamat">JENIS_MOBIL</label>
                    <input type="text" class="form-control" name="jenis_mobil" id="exampleInputEmail1" placeholder="Mobil">
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