<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doa extends Model
{
    //
    public $table='doa_tbl';
    protected $fillable=[
        'nama','no_wa','pokok_doa'
    ];
    
}
