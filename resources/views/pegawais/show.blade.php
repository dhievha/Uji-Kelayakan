@extends('layouts.main')

@section('content')

  <br>
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h1 class="card-title">Edit Studio</h1>
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

        <form action="{{ route('ruangs.show',$ruang->id_jenis) }}" method="POST" enctype="multipart/form-data">

            @csrf @method('PUT')

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="studioID"
                            value="{{ $ruang->id_jenis }}"
                            class="form-control"
                            placeholder="Name"
                            disabled="disabled">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="studio"
                            value="{{ $ruang->nama_ruang }}"
                            class="form-control"
                            placeholder="Studio" readonly>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="tarif"
                            value="{{ $ruang->kode_ruang }}"
                            class="form-control"
                            placeholder="Tarif" readonly>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="fasilitas"
                            value="{{ $ruang->keterangan }}"
                            class="form-control"
                            placeholder="Fasilitas" readonly>
                    </div>
                </div>

                <div class="col-xs6 col-sm6 col-md-6">
                    <div class="form-group">

                    </div>
                </div>

                <div class="col-xs6 col-sm6 col-md-6 text-right">
                    <a class="btn btn-primary" href="{{ route('ruangs.index') }}" style="float:right;">
                        Back</a>
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
