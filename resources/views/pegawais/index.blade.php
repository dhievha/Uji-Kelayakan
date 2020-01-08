@extends('layouts.main') @section('content')

<br>
<!-- Main content -->
<section class="content">
    <title>Animaxx | Studio</title>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Input Pegawai</h1>
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

            <form action="{{ route('pegawais.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="nip" class="form-control" placeholder="NIP">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <textarea
                                class="form-control"
                                style="height:100px"
                                name="alamat"
                                placeholder="Alamaat"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">

                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">

                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->

    <div class="card">
        <div class="card-body">
            <div class="container">
                <table class="table">
                    <tr style="text-align:center;">
                        <th>No</th>
                        {{-- <th>ID Studio</th> --}}
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Alamaat</th>
                        <th width="300px">Action</th>
                    </tr>
                    @foreach ($pegawais as $pegawai)
                    <tr style="text-align:center;">
                    <td>{{ ++$i }}</td>
                    <td>{{ $pegawai->nama_pegawai }}</td>
                    <td>{{ $pegawai->nip }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>
                        <form action="{{ route('pegawais.destroy',$pegawai->id_pegawai) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('pegawais.show',$pegawai->id_pegawai) }}"><i class="far fa-file" style="color:white;"></i> Show</a>

                            <a class="btn btn-primary" href="{{ route('pegawais.edit',$pegawai->id_pegawai) }}"><i class="far fa-edit" style="color:white;"></i> Edit</a>

                            @csrf @method('DELETE')

                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash" style="color:white;"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
    </div>
</div>
<!-- /.card -->

</section>
@endsection
