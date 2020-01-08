<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model
{
    protected $table='detail_pinjams';
    protected $fillable=['id_peminjaman', 'id_inventaris', 'jumlah'];
    protected $primaryKey='id_peminjaman';
}
