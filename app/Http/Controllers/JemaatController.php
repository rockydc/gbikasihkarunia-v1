<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JemaatRequest;
use App\Models\Jemaat;
use App\Models\anggota_keluarga_jemaat as Member;

class JemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $items = Jemaat::when($request->keyword,function($query) use($request){

            $query->where('nama','like',"%{$request->keyword}%")
            ->orWhere('pekerjaan','like',"%{$request->keyword}%")
            ->orWhere('no_telp','like',"%{$request->keyword}%")
            ->orWhere('tgl_lahir','like',"%{$request->keyword}%")
            ->orWhere('alamat','like',"%{$request->keyword}%");

        })->paginate($request->limit ?? 10);

        $items->appends($request->only('keyword','limit'));


        // $items =Jemaat::paginate(1);
        return view('pages.jemaat.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.jemaat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JemaatRequest $request)
    {
        $insert_data = [];
        $data = $request->all();
        // $data['nama'] = $request->input('nama');
        // $data['pekerjaan'] = $request->input('pekerjaan');
        // $data['no_telp'] = $request->input('no_telp');
        // $data['gender'] = $request->input('gender');
        // $data['tgl_lahir'] = $request->input('tgl_lahir');
        // $data['alamat'] = $requets->input('alamat');
        $data['status_menikah']= $request->post('status_kawin');
        $data['tgl_diberkati'] = $request->post('tgl_diberkati');
        $data['tgl_pernikahan'] = $request->post('tgl_kawin');

       
        $save = Jemaat::create($data);
        $get_id = $save->id;
     
     

    

        
       
        // dd($request->post('status_kawin'));
        if($request->post('status_kawin') !== 'belum menikah'){
             

        $nama_anggota = $request->namakeluarga;
        $pekerjaan_anggota= $request->pekerjaan_anggota;
        $tempatlahir = $request->tempatlahir;
        $tgl_lahir_anggota = $request->tgl_lahir_anggota;
        $tgl_baptis_anggota = $request->tgl_baptis_anggota;
        $hubungan = $request->hubungan;
        $gender_anggota = $request->gender_anggota;
        $statusmenikah = $request->statusmenikah;
            for($count=0; $count < count($nama_anggota); $count++)
            {
    
                $anggota = array(
                    'kepala_id'=>$get_id,
                    'nama_anggota'=>$nama_anggota[$count],
                    'tgl_baptis'=>$tgl_baptis_anggota[$count],
                    'tgl_lahir'=>$tgl_lahir_anggota[$count],
                    'hubungan'=>$hubungan[$count],
                    'gender'=>$gender_anggota[$count],
                    'status_menikah'=>$statusmenikah[$count],
                    'pekerjaan'=>$pekerjaan_anggota[$count]
            
                );
                $insert_data[]= $anggota;
             
               
            }
            Member::insert($insert_data);
            return redirect()->route('jemaat.index');
        }else{
            return redirect()->route('jemaat.index');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $jemaat = Jemaat::findOrFail($id);
        $member = Member::with(['jemaat_packages'])->get()->where('kepala_id',$id);
        //  return dd($member->first()->nama_anggota);

        // dd($member->toArray());
        return view('pages.jemaat.show',[
            
            'jemaat'=>$jemaat,
            'member'=>$member
   
        ]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
