@extends('layouts.main')

@section('content')

  <br>
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h1 class="card-title">Edit Jenis</h1>
      </div>
      <div class="card-body">

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            There were some problems with your input.<br><br>
            <ul>

                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif

        <form action="{{ route('invens.update',$inven->id_inventaris) }}" method="POST" enctype="multipart/form-data">

            @csrf @method('PUT')

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="id_inventaris"
                            value="{{ $inven->id_inventaris }}"
                            class="form-control"
                            placeholder="Name"
                            disabled="disabled">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="nama"
                            value="{{ $inven->nama }}"
                            class="form-control"
                            placeholder="Nama Jenis">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="kondisi"
                            value="{{ $inven->kondisi }}"
                            class="form-control"
                            placeholder="Kode Jenis">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="jumlah"
                            value="{{ $inven->jumlah }}"
                            class="form-control"
                            placeholder="Keterangan">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="kode_inventaris"
                            value="{{ $inven->kode_inventaris }}"
                            class="form-control"
                            placeholder="Keterangan">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="date"
                            name="tanggal_register"
                            value="{{ $inven->tanggal_register }}"
                            class="form-control"
                            placeholder="Keterangan">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select class="form-control form-control-md" name="id_jenis" id="">
                            <option value="{{$inven->id_jenis}}" disableselected>{{$inven->id_jenis}}</option>
                            @if ($jns->count()>0) @foreach ($jns as $jn)

                            <option value="{{$jn->id_jenis}}">{{$jn->nama_jenis}}</option>

                            @endforeach @endif
                        </select>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select class="form-control form-control-md" name="id_petugas" id="">
                            <option value="{{$inven->id_petugas}}" disabled="disabled" selected="selected">{{$inven->id_petugas}}</option>
                            @if ($users->count()>0) @foreach ($users as $user)

                            <option value="{{$user->id}}">{{$user->name}}</option>

                            @endforeach @endif
                        </select>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <div class="form-group">
                        <textarea
                            class="form-control"
                            style="height:100px"
                            name="keterangan"
                            placeholder="Keterangan">{{$inven->keterangan}}</textarea>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select class="form-control form-control-md" name="id_ruang" id="">
                            <option disabled="disabled" selected="selected" value="{{$inven->id_jenis}}">{{$inven->id_jenis}}</option>
                            @if ($ruangs->count()>0) @foreach ($ruangs as $ruang)

                            <option value="{{$ruang->id_jenis}}">{{$ruang->nama_ruang}}</option>


                            @endforeach @endif
                        </select>
                    </div>
                </div>

                <div class="col-xs6 col-sm6 col-md-6">
                    <div class="form-group">

                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
      <!-- /.card-body -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->



  </section>
@endsection
