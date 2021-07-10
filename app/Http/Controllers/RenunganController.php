<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RenunganModel as Renungan;
use Illuminate\Support\Str;
class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $items = Renungan::all();

        // return view('pages.renungan.index',[
        //     'items'=>$items
        // ]);
        $items = Renungan::when($request->keyword,function($query) use($request){

            $query->where('judul','like',"%{$request->keyword}%")
            ->orWhere('tanggal','like',"%{$request->keyword}%");
       

        })->paginate($request->limit ?? 10);

        $items->appends($request->only('keyword','limit'));


        // $items =Jemaat::paginate(1);
        return view('pages.renungan.index',compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.renungan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        Renungan::create($data);

        return redirect()->route('renungan.index');
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
        $item= Renungan::findOrFail($id);

        return view('pages.renungan.edit',[
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
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $data['slug'] =  Str::slug($request->judul);

        $item = Renungan::findOrFail($id);
        $item->update($data);

        return redirect()->route('renungan.index');
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
        $item=Renungan::findOrFail($id);
        $item->delete();

        return redirect()->route('renungan.index');
    }
}
