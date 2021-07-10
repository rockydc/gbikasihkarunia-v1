<?php

namespace App\Http\Controllers;
use App\Models\Persembahan;
use Illuminate\Http\Request;
use App\Http\Requests\PersembahanRequest;

class PersembahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $items = Persembahan::when($request->keyword,function($query) use($request){

            $query->where('nama','like',"%{$request->keyword}%")
            ->orWhere('pekerjaan','like',"%{$request->keyword}%")
            ->orWhere('no_telp','like',"%{$request->keyword}%")
            ->orWhere('tgl_lahir','like',"%{$request->keyword}%")
            ->orWhere('alamat','like',"%{$request->keyword}%");

        })->paginate($request->limit ?? 10);

        $items->appends($request->only('keyword','limit'));


        // $items =Jemaat::paginate(1);
        return view('pages.persembahan.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.persembahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersembahanRequest $request)
    {
        //
        $data=$request->all();

        
        Persembahan::create($data);
        return redirect()->route('persembahan.index');

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
        
        $item= Persembahan::findOrFail($id);
        return view('pages.persembahan.edit',[
            'item'=>$item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersembahanRequest $request, $id)
    {
        //
        $data=$request->all();

        $item= Persembahan::findOrFail($id);
        $item->update($data);
        return redirect()->route('persembahan.index');
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
                //
                $item= Persembahan::findOrFail($id);
                $item->delete();
        
                return redirect()->route('persembahan.index');
    }
}
