<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table='pegawais';
    protected $fillable=['id_pegawai', 'nama_pegawai', 'nip', 'alamat'];
    protected $primaryKey='id_pegawai';
}
