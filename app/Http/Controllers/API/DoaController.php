<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doa as doa;
use Illuminate\Support\Str;
class DoaController extends Controller
{
    //

    public function all(Request $request){

        $id=$request->input('id');
        $limit = $request->input('limit',5);
        $nama = $request->input('nama');
      
        if($id)
        {
            $doa =  doa::find($id);

            if($doa)
            return ResponseFormatter::success($doa,'doa Berhasil Diambil');
            else
            return ResponseFormatter::error($doa,'doa tidak ada',404);
        }
        
        if($nama){
            doa::where('judul','like','%'. $judul.'%');
        }
       

    
      

        return ResponseFormatter::success(
            doa::orderBy('id','desc')->paginate($limit),
            'Data doa berhasil diambil'
        );

    }

    
    public function insert(Request $request){
        $data = $request->all();
      
        doa::create($data);


        return response()->json($data);

    }
}
