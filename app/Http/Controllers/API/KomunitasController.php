<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Komunitas as komunitas;
use Illuminate\Support\Str;
class KomunitasController extends Controller
{
    //

    public function all(Request $request){

        $id=$request->input('id');
        $limit = $request->input('limit',5);
        $judul = $request->input('name');


        if($id)
        {
            $komunitas =  komunitas::find($id);

            if($komunitas)
            return ResponseFormatter::success($komunitas,'komunitas Berhasil Diambil');
            else
            return ResponseFormatter::error($komunitas,'komunitas tidak ada',404);
        }
     
        
        if($judul){
            komunitas::where('judul','like','%'. $judul.'%');
        }
       

        return ResponseFormatter::success(
            komunitas::orderBy('id','desc')->paginate($limit),
            'Data komunitas berhasil diambil'
        );

    }



}
