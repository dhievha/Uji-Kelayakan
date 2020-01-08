@extends('layouts.main') @section('content')

<br>
<!-- Main content -->
<section class="content">
    <title>Animaxx | Studio</title>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Input inven</h1>
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

            <form action="{{ route('invens.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="kondisi" class="form-control" placeholder="Kondisi">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <select class="form-control form-control-md" name="id_jenis" id="">
                                <option value="" disabled="disabled" selected="selected">Nama Jenis</option>
                                @if ($jns->count()>0) @foreach ($jns as $jn)

                                <option value="{{$jn->id_jenis}}">{{$jn->nama_jenis}}</option>

                                @endforeach @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="date" name="tanggal_register" class="form-control" placeholder="Jumlah">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <div class="form-group">
                            <input type="text" name="kode_inventaris" class="form-control" placeholder="Kode Inventaris">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <select class="form-control form-control-md" name="id_petugas" id="">
                                <option value="" disabled="disabled" selected="selected">Nama Pegawai</option>
                                @if ($users->count()>0) @foreach ($users as $user)

                                <option value="{{$user->id}}">{{$user->name}}</option>

                                @endforeach @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <select class="form-control form-control-md" name="id_ruang" id="">
                                <option disabled="disabled" selected="selected">Nama Ruangan</option>
                                @if ($ruangs->count()>0) @foreach ($ruangs as $ruang)

                                <option value="{{$ruang->id_jenis}}">{{$ruang->nama_ruang}}</option>


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
                        {{-- <th>ID Studio</th> --}}
                        <th>Nama</th>
                        <th>Kondisi</th>
                        <th>Jumlah</th>
                        <th>Nama Jenis</th>
                        <th>Tanggal Register</th>
                        <th>Nama Ruangan</th>
                        <th>Kode Inventaris</th>
                        <th>Nama Pegawai</th>
                        <th>Keterangan</th>
                        <th width="100px">Action</th>
                    </tr>
                    @foreach ($invens as $inven)
                    <tr style="text-align:center;">
                    <td>{{ $inven->nama }}</td>
                    <td>{{ $inven->kondisi }}</td>
                    <td>{{ $inven->jumlah }}</td>
                    <td>{{ $inven->id_jenis }}</td>
                    <td>{{ $inven->tanggal_register }}</td>
                    <td>{{ $inven->id_ruang }}</td>
                    <td>{{ $inven->kode_inventaris }}</td>
                    <td>{{ $inven->id_petugas }}</td>
                    <td>{{ $inven->keterangan }}</td>
                    <td>
                        <form action="{{ route('invens.destroy',$inven->id_inventaris) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('invens.edit',$inven->id_inventaris) }}"><i class="far fa-edit" style="color:white;"></i> Edit</a>

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
