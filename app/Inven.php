<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inven extends Model
{
    protected $table='invens';
    protected $fillable=['id_inventaris', 'nama', 'kondisi', 'keterangan','jumlah','id_jenis','tanggal_register','id_ruang','kode_inventaris','id_petugas'];
    protected $primaryKey='id_inventaris';
}
