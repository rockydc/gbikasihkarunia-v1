<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\anggota_keluarga_jemaat;
class Jemaat extends Model
{
    //

    public $table = 'jemaat_tbl';
    protected $fillable = [

      'nama','pekerjaan','no_telp','tgl_lahir','gender','status_menikah',
      'alamat','tgl_diberkati','tgl_pernikahan'
    ];


    public function members(){
      return $this->hasMany(anggota_keluarga_jemaat::class,'id','kepala_id');
    }
    
}
