<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $items = Event::when($request->keyword,function($query) use($request){

            $query->where('judul','like',"%{$request->keyword}%")
            ->orWhere('tanggal','like',"%{$request->keyword}%")
            ->orWhere('kadaluarsa','like',"%{$request->keyword}%");
        })->paginate($request->limit ?? 5);
        $items->appends($request->only('keyword','limit'));
        return view('pages.event.index',compact('items'));

        // $items=Event::all();
        // return view('pages.event.index',[
        //     'items'=>$items
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $data=$request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['gambar']= $request->file('gambar')->store(
            'assets/galleryevent','public'
        );
        $data['kadaluarsa']=false;
        Event::create($data);
        return redirect()->route('event.index');


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
        $item= Event::findOrFail($id);

        return view('pages.event.edit',[
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
        $data =$request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['gambar']= $request->file('gambar')->store(
            'assets/galleryevent','public'
        );
        $item= Event::findOrFail($id);
        $item->update($data);

        return redirect()->route('event.index');

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
        $item= Event::findOrFail($id);
        $item->delete();

        return redirect()->route('event.index');


    }
}
