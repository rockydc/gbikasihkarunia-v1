<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RenunganModel as Renungan;
use Illuminate\Support\Str;
class RenunganController extends Controller
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
            $renungan =  Renungan::find($id);

            if($renungan)
            return ResponseFormatter::success($renungan,'Renungan Berhasil Diambil');
            else
            return ResponseFormatter::error($renungan,'Renungan tidak ada',404);
        }
        if($slug)
        {
            $renungan =  Renungan::where('slug',$slug)
            ->first();

            if($renungan)
            return ResponseFormatter::success($renungan,'Renungan Berhasil Diambil');
            else
            return ResponseFormatter::error($renungan,'Renungan tidak ada',404);
        }
        
        if($judul){
            Renungan::where('judul','like','%'. $judul.'%');
        }
       

        if($tanggal_start){
            Renungan::where('tanggal','>=',$tanggal_start);
        }
     
        if($tanggal_end){
            Renungan::where('tanggal','<=',$tanggal_end);
        }
      

        return ResponseFormatter::success(
            Renungan::orderBy('id','desc')->paginate($limit),
            'Data Renungan berhasil diambil'
        );

    }

    public function insert(Request $request){
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        Renungan::create($data);


        return response()->json($data);

    }

    public function update(Request $request,$id){
        $data = $request->all();
        $data['slug']= Str::slug($request->judul);

        $item = Renungan::findOrFail($id);
        $item->update($data);

        if($item)
        {
            return ResponseFormatter::success($data,'Renungan Berhasil Diupdate');
        }else{
            return ResponseFormatter::error($data,'Renungan tidak berhasil diupdate',404);
        }
    }
    public function delete($id){

        $item=Renungan::findOrFail($id)->first();
        $item->delete();
        if($item)
        {
        return ResponseFormatter::success(null,'Renungan Berhasil dihapus');
        }else{
            return ResponseFormatter::error($item,'Renungan tidak berhasil diupdate',404);
        }
    }

}
