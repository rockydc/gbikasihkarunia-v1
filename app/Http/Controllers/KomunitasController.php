<?php

namespace App\Http\Controllers;
use App\Http\Requests\KomunitasRequest;
use App\Models\Komunitas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $items = Komunitas::when($request->keyword,function($query) use($request){

            $query->where('judul','like',"%{$request->keyword}%")
            ->orWhere('pic','like',"%{$request->keyword}%")
            ->orWhere('no_wa','like',"%{$request->keyword}%");
     

        })->paginate($request->limit ?? 10);

        $items->appends($request->only('keyword','limit'));


        // $items =Jemaat::paginate(1);
        return view('pages.komunitas.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.komunitas.create');
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
        $data=$request->all();
        $data['slug']= Str::slug($request->judul);
        $data['gambar']=$request->file('gambar')->store(
            'assets/gallerykomunitas','public'
        );
        
        Komunitas::create($data);
        return redirect()->route('komunitas.index');


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
        $item= Komunitas::findOrFail($id);
        return view('pages.komunitas.edit',[
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
          //
          $data =$request->all();
          $data['slug'] = Str::slug($request->judul);
          $data['gambar']= $request->file('gambar')->store(
              'assets/gallerykomunitas','public'
          );
          $item= Komunitas::findOrFail($id);
          $item->update($data);
  
          return redirect()->route('komunitas.index');
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
        $item= Komunitas::findOrFail($id);
        $item->delete();

        return redirect()->route('komunitas.index');
    }
}
