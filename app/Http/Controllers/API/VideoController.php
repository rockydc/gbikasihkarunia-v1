<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video as Video;
use Illuminate\Support\Str;
class VideoController extends Controller
{
    //

    public function all(Request $request){

        $id=$request->input('id');
        $limit = $request->input('limit',5);
        $nama = $request->input('nama');
      
        if($id)
        {
            $Video =  Video::find($id);

            if($Video)
            return ResponseFormatter::success($Video,'Video Berhasil Diambil');
            else
            return ResponseFormatter::error($Video,'Video tidak ada',404);
        }
        
        if($nama){
            Video::where('judul','like','%'. $judul.'%');
        }
       

    
      

        return ResponseFormatter::success(
            Video::orderBy('id','desc')->paginate($limit),
            'Data Video berhasil diambil'
        );

    }

    

}
