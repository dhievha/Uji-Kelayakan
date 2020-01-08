@extends('layouts.main') @section('content')

<br>
<!-- Main content -->
<section class="content">
    <title>Animaxx | Studio</title>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Input Jenis</h1>
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

            <form action="{{ route('details.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="nama_jenis" class="form-control" placeholder="Nama Jenis">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="kode_jenis" class="form-control" placeholder="Kode Jenis">
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
                        <th>Nama Jenis</th>
                        <th>Kode Jenis</th>
                        <th>Keterangan</th>
                        <th width="300px">Action</th>
                    </tr>
                    @foreach ($jeniss as $jenis)
                    <tr style="text-align:center;">
                    <td>{{ ++$i }}</td>
                    <td>{{ $jenis->nama_jenis }}</td>
                    <td>{{ $jenis->kode_jenis }}</td>
                    <td>{{ $jenis->keterangan }}</td>
                    <td>
                        <form action="{{ route('jenis.destroy',$jenis->id_jenis) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('jenis.show',$jenis->id_jenis) }}"><i class="far fa-file" style="color:white;"></i> Show</a>

                            <a class="btn btn-primary" href="{{ route('jenis.edit',$jenis->id_jenis) }}"><i class="far fa-edit" style="color:white;"></i> Edit</a>

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
