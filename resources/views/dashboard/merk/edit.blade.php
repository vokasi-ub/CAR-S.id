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

            <form class="form-horizontal" action="/merk/update" method="post">

               {{ csrf_field() }}

              <div class="box-body">
                  <input type="hidden" name="id_merek" value="{{ $li->id_merek }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Merek</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_merek" value="{{ $li->id_merek }}" placeholder="ID Merek">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Merk</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="merek" value="{{ $li->merek }}" placeholder="Merk">
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