<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    //

    public $table='komunitas_tbl';
    protected $fillable=[
        'judul','gambar','deskripsi','pic','no_wa'
    ];
}
