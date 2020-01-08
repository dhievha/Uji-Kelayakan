<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table='ruangs';
    protected $fillable=['id_jenis', 'nama_ruang', 'kode_ruang', 'keterangan'];
    protected $primaryKey='id_jenis';
}
