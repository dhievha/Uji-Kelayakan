@extends('layouts.main') @section('content')

<br>
<!-- Main content -->
<section class="content">
    <title>Animaxx | Studio</title>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Input Ruang</h1>
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

            <form action="{{ route('ruangs.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="nama_ruang" class="form-control" placeholder="Nama ruang">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="kode_ruang" class="form-control" placeholder="Kode ruang">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <textarea
                                class="form-control"
                                style="height:100px"
                                name="keterangan"
                                placeholder="Keterangan"></textarea>
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
                        <th>Nama ruang</th>
                        <th>Kode ruang</th>
                        <th>Keterangan</th>
                        <th width="300px">Action</th>
                    </tr>
                    @foreach ($ruangs as $ruang)
                    <tr style="text-align:center;">
                    <td>{{ ++$i }}</td>
                    <td>{{ $ruang->nama_ruang }}</td>
                    <td>{{ $ruang->kode_ruang }}</td>
                    <td>{{ $ruang->keterangan }}</td>
                    <td>
                        <form action="{{ route('ruangs.destroy',$ruang->id_jenis) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('ruangs.show',$ruang->id_jenis) }}"><i class="far fa-file" style="color:white;"></i> Show</a>

                            <a class="btn btn-primary" href="{{ route('ruangs.edit',$ruang->id_jenis) }}"><i class="far fa-edit" style="color:white;"></i> Edit</a>

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
