<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event as Event;
use Illuminate\Support\Str;
class EventController extends Controller
{
    //

    public function all(Request $request){

        $id=$request->input('id');
        $limit = $request->input('limit',5);
        $judul = $request->input('name');
        $slug = $request->input('slug');
        $tanggal_start = $request->input('tanggal_start');
        $tanggal_end = $request->input('tanggal_end');

        if($id)
        {
            $Event =  Event::find($id);

            if($Event)
            return ResponseFormatter::success($Event,'Event Berhasil Diambil');
            else
            return ResponseFormatter::error($Event,'Event tidak ada',404);
        }
        if($slug)
        {
            $Event =  Event::where('slug',$slug)
            ->first();

            if($Event)
            return ResponseFormatter::success($Event,'Event Berhasil Diambil');
            else
            return ResponseFormatter::error($Event,'Event tidak ada',404);
        }
        
        if($judul){
            Event::where('judul','like','%'. $judul.'%');
        }
       

        if($tanggal_start){
            Event::where('tanggal','>=',$tanggal_start);
        }
     
        if($tanggal_end){
            Event::where('tanggal','<=',$tanggal_end);
        }
      

        return ResponseFormatter::success(
            Event::orderBy('id','desc')->paginate($limit),
            'Data Event berhasil diambil'
        );

    }

    
}
