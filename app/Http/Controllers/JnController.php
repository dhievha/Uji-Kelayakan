<?php

namespace App\Http\Controllers;

use App\Jn;
use Illuminate\Http\Request;

class JnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeniss = Jn::latest()->paginate(5);
        return view("jenis.index", compact('jeniss'))
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
            //'studioId'=>'required',
            'nama_jenis'=>'required',
            'kode_jenis'=>'required',
            'keterangan'=>'required',
        ]);

        Jn::create($request->all());
        return redirect()->route('jenis.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jn  $jn
     * @return \Illuminate\Http\Response
     */
    public function show(Jn $jn)
    {
        return view('jenis.show', compact('jn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jn  $jn
     * @return \Illuminate\Http\Response
     */
    public function edit(Jn $jn)
    {
        return view('jenis.edit', compact('jn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jn  $jn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jn $jn)
    {
        $request->validate([
            //'studioId'=>'required',
            'nama_jenis'=>'required',
            'kode_jenis'=>'required',
            'keterangan'=>'required',
        ]);

        $jn->update($request->all());
        return redirect()->route('jenis.index')
        ->with('Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jn  $jn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jn $jn)
    {
        $jn->delete();
        return redirect()->route('jenis.index')
        ->with('Data di Hapus');
    }
}
