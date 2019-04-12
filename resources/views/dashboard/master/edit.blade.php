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

            <form class="form-horizontal" action="/datakategori/update" method="post">

               {{ csrf_field() }}

              <div class="box-body">
                  <input type="hidden" name="id_pesanan" value="{{ $li->id_pesanan }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Durasi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="durasi" value="{{ $li->durasi }}" placeholder="Durasi">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Pesan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tgl_pesan" value="{{ $li->tgl_pesan }}" placeholder="Tanggal Pesan">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Kembali</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tgl_kembali" value="{{ $li->tgl_kembali }}" placeholder="Tanggal kembali">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Mobil</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_mobil" value="{{ $li->id_mobil }}" placeholder="ID Mobil">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Penyewa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_penyewa" value="{{ $li->id_penyewa }}" placeholder="ID Penyewa">
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