<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persembahan as Persembahan;
use Illuminate\Support\Str;
class PersembahanController extends Controller
{
    //

    public function all(Request $request){

        $id=$request->input('id');
        $limit = $request->input('limit',5);
        $nama = $request->input('nama');


        if($id)
        {
            $Persembahan =  Persembahan::find($id);

            if($Persembahan)
            return ResponseFormatter::success($Persembahan,'Persembahan Berhasil Diambil');
            else
            return ResponseFormatter::error($Persembahan,'Persembahan tidak ada',404);
        }
     
        
        if($nama){
            Persembahan::where('nama','like','%'. $nama.'%');
        }
       

        return ResponseFormatter::success(
            Persembahan::orderBy('id','desc')->paginate($limit),
            'Data Persembahan berhasil diambil'
        );

    }



}
