<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public $table='video_tbl';
    protected $fillable=[
        'nama','sumberurl'
    ];


}
