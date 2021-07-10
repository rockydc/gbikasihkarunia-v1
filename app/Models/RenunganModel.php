<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RenunganModel extends Model
{
    //
    public $table = 'tbl_renungan';
    protected $fillable=[
        'judul','slug','ayat','tanggal','deskripsi'
    ];

    protected $hidden=[
       
    ];
}
