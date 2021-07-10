<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public $table = 'event_tbl';
    protected $fillable =[

        'judul','slug','deskripsi','tanggal','kadaluarsa','gambar'
    ];

    protected $hidden=[];
}


