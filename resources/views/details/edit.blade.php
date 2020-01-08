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

        <form action="{{ route('jenis.update',$jn->id_jenis) }}" method="POST" enctype="multipart/form-data">

            @csrf @method('PUT')

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="jenis_id"
                            value="{{ $jn->id_jenis }}"
                            class="form-control"
                            placeholder="Name"
                            disabled="disabled">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="nama_jenis"
                            value="{{ $jn->nama_jenis }}"
                            class="form-control"
                            placeholder="Nama Jenis">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="kode_jenis"
                            value="{{ $jn->kode_jenis }}"
                            class="form-control"
                            placeholder="Kode Jenis">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="keterangan"
                            value="{{ $jn->keterangan }}"
                            class="form-control"
                            placeholder="Keterangan">
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
