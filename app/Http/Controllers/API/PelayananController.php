<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelayanan as pelayanan;
use Illuminate\Support\Str;
class PelayananController extends Controller
{
    //

    public function all(Request $request){

        $id=$request->input('id');
        $limit = $request->input('limit',5);
        $judul = $request->input('name');


        if($id)
        {
            $pelayanan =  pelayanan::find($id);

            if($pelayanan)
            return ResponseFormatter::success($pelayanan,'pelayanan Berhasil Diambil');
            else
            return ResponseFormatter::error($pelayanan,'pelayanan tidak ada',404);
        }
     
        
        if($judul){
            pelayanan::where('judul','like','%'. $judul.'%');
        }
       

        return ResponseFormatter::success(
            pelayanan::orderBy('id','desc')->paginate($limit),
            'Data pelayanan berhasil diambil'
        );

    }



}
