<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jemaat;

class anggota_keluarga_jemaat extends Model
{
    
    //
    public $table = 'anggota_kk_tbl';
    protected $fillable = [

        'kepala_id','nama_anggota','tgl_baptis','tgl_lahir',
        'hubungan','gender','status_menikah','pekerjaan'
    ];

    protected $hidden=[];

    public function jemaat_packages(){

        return $this->belongsTo(Jemaat::class, 'kepala_id','id');
    }
}
