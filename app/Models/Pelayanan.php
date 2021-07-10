<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    //
    public $table='pelayanan_tbl';
    protected $fillable=[
        'judul','gambar','deskripsi','pic','no_wa'
    ];
}
