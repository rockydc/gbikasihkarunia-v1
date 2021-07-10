@extends('layouts.video.create')

@section('create-video')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Edit Video {{$item->nama}}</h3>
                    <div class="card shadow">
                     
                    <div class="card-header py-3">
                    
                    @if($errors->any())

                        <div class="aler alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    </div>


                        <div class="card-body">
                           <form action="{{route('video.update',$item->id)}}" method="post" enctype="multipart/form-data">
                           @method('put')
                           @csrf

                           <div class="form-group">
                           <label for="video">Nama</label>
                           <input type="text" class="form-control" name="nama" placeholder="masukkan judul video" value="{{$item->nama}}"> 
                           </div>
                           <div class="form-group">
                           <label for="sumberurl">URL</label>
                           <input type="text" class="form-control" name="sumberurl" placeholder="masukkan Ayat" value="{{$item->sumberurl}}"> 
                           </div>
                           <div class="d-flex justify-content-center align-items-center">
                           <button style="width:300px;" type="submit" class="btn btn-primary btn-block">
                           Simpan
                           </button>
                           </div>

                           </form>

                        </div>
                    </div>
                </div>

@endsection