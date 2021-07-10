<?php

namespace App\Http\Controllers;
use App\Models\Doa;
use Illuminate\Http\Request;

class DoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $items = Doa::when($request->keyword,function($query) use($request){

            $query->where('nama','like',"%{$request->keyword}%")
            ->orWhere('no_wa','like',"%{$request->keyword}%")
            ->orWhere('pokok_doa','like',"%{$request->keyword}%");
          

        })->paginate($request->limit ?? 10);

        $items->appends($request->only('keyword','limit'));


        // $items =Jemaat::paginate(1);
        return view('pages.doa.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $item= Doa::findOrFail($id);
        $item->delete();

        return redirect()->route('doa.index');

    }
}
