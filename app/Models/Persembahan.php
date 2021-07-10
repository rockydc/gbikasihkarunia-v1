<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persembahan extends Model
{
    //
    public $table='persembahan_tbl';
    protected $fillable=[
            'nama','no_rek','atas_nama'
    ];

}
