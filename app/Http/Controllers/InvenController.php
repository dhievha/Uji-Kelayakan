<?php

namespace App\Http\Controllers;

use App\Inven;
use App\Pegawai;
use App\User;
use App\Ruang;
use App\Jn;
use Illuminate\Http\Request;

class InvenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::All();
        $invens=Inven::All();
        $pegawais=Pegawai::all();
        $ruangs=Ruang::all();
        $jns = Jn::latest()->paginate(5);
        return view("invens.index", compact('invens','pegawais','ruangs','jns','users'))
        ->with('i',(request()->input('page',1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'kondisi'=>'required',
            'keterangan'=>'required',
            'jumlah'=>'required',
            'id_jenis'=>'required',
            'tanggal_register'=>'required',
            'id_ruang'=>'required',
            'kode_inventaris'=>'required',
            'id_petugas'=>'required',
        ]);

        Inven::create($request->all());
        return redirect()->route('invens.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inven  $inven
     * @return \Illuminate\Http\Response
     */
    public function show(Inven $inven)
    {
        return view('invens.show', compact('inven'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inven  $inven
     * @return \Illuminate\Http\Response
     */
    public function edit(Inven $inven)
    {
        $users=User::All();
        $pegawais=Pegawai::all();
        $ruangs=Ruang::all();
        $jns=JN::All();
        return view('invens.edit', compact('inven','users','pegawais','ruangs','jns'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inven  $inven
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inven $inven)
    {
        $request->validate([
            'nama'=>'required',
            'kondisi'=>'required',
            'keterangan'=>'required',
            'jumlah'=>'required',
            'id_jenis'=>'required',
            'tanggal_register'=>'required',
            'id_ruang'=>'required',
            'kode_inventaris'=>'required',
            'id_petugas'=>'required',
        ]);

        $inven->update($request->all());
        return redirect()->route('invens.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inven  $inven
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inven $inven)
    {
        $inven->delete();
        return redirect()->route('invens.index')
        ->with('Data di Hapus');
    }
}
