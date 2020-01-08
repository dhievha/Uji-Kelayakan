<?php

namespace App\Http\Controllers;

use App\DetailPinjam;
use App\Inven;
use Illuminate\Http\Request;

class DetailPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invens= Inven::All();
        $details = DetailPinjam::latest()->paginate(5);
        return view("details.index", compact('details','invens'))
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
            'id_inventaris'=>'required',
            'jumlah'=>'required',
        ]);

        DetailPinjam::create($request->all());
        return redirect()->route('details.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPinjam $detailPinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPinjam $detailPinjam)
    {
        $inven=Inven::All();
        return view('details.edit', compact('detailPinjam','inven'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPinjam $detailPinjam)
    {
        $request->validate([
            //'studioId'=>'required',
            'id_inventaris'=>'required',
            'jumlah'=>'required',
        ]);

        $detailPinjam->update($request->all());
        return redirect()->route('details.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPinjam $detailPinjam)
    {
        $detailPinjam->delete();
        return redirect()->route('details.index')
        ->with('Data di Hapus');
    }
}
