@extends('dashboard.master.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->



    <!-- Content Header (Page header) -->

    <!-- Content Header (Page header) -->

    <section class="content-header">

<h1>Data Kategori</h1>

<br>

          <div class="box box-info">

            <div class="box-header with-border">

              <h3 class="box-title">Horizontal Form</h3>

            </div>

            <!-- /.box-header -->

            <!-- form start -->

            @foreach($categories as $li)

            <form class="form-horizontal" action="/penyewa/update" method="post">

               {{ csrf_field() }}

              <div class="box-body">
                  <input type="hidden" name="id_pelanggan" value="{{ $li->id_pelanggan }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Pelanggan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pelanggan" value="{{ $li->id_pelanggan }}" placeholder="Durasi">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="{{ $li->nama }}" placeholder="nama">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">No HP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_hp" value="{{ $li->no_hp }}" placeholder="No HP">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="{{ $li->alamat }}" placeholder="Alamat">
                  </div>
                </div>
              </div>

              <!-- /.box-body -->

              <div class="box-footer">

                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>

                <button type="submit" class="btn btn-info pull-right">Submit</button>

              </div>

              <!-- /.box-footer -->

            </form>

          </div>

        </section>

        @endforeach



    <!-- /.content -->

  

    <!-- /.content -->

@endsection