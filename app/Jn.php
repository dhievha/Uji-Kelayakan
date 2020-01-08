<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jn extends Model
{
    protected $table='jns';
    protected $fillable=['id_jenis', 'nama_jenis', 'kode_jenis', 'keterangan'];
    protected $primaryKey='id_jenis';
}
