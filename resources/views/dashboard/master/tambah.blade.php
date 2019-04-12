@extends('dashboard.master.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->



    <!-- Content Header (Page header) -->

    <!-- Content Header (Page header) -->

    <!--<section class="content-header">-->

<h1>Data Kategori</h1>

<br>

          <div class="box box-info">

            <div class="box-header with-border">

              <h3 class="box-title">Horizontal Form</h3>

            </div>

            <!-- /.box-header -->

            <!-- form start -->

            

            <form class="form-horizontal" action="/pesanan/tambah" method="post">

               {{ csrf_field() }}

              <div class="box-body">
                 
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Pesanan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pesanan" placeholder="ID Pesanan">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Durasi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="durasi" placeholder="Durasi">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Pesan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tgl_pesan" placeholder="Tanggal Pesan">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Kembali</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tgl_kembali" placeholder="Tanggal kembali">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Mobil</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_mobil" placeholder="ID Mobil">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Penyewa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_penyewa" placeholder="ID Penyewa">
                  </div>
                </div>
              </div>

              <!-- /.box-body -->

              <div class="box-footer">

                <button type="submit" class="btn btn-default" data-dismiss="modal"><a href="home">Cancel</a></button>

                <button type="submit" class="btn btn-info pull-right">Submit</button>

              </div>

              <!-- /.box-footer -->

            </form>

          </div>

     <!--   </section> -->

        


    <!-- /.content -->

  

    <!-- /.content -->

@endsection