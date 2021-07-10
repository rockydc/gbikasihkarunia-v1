@extends('layouts.event.create')

@section('create-event')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Edit Event {{$item->judul}} >
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
                           <form action="{{route('event.update',$item->id)}}" method="post" enctype="multipart/form-data">
                           @method('put')
                           @csrf

                           <div class="form-group">
                           <label for="judul">Judul</label>
                           <input type="text" class="form-control" name="judul" placeholder="masukkan judul event" value="{{$item->judul}}"> 
                           </div>
                           <div class="form-group">
                           <label for="gambar">Gambar</label>
                           <input type="file" name="gambar" class="form-control">
                            </textarea>
                           </div>
                           <div class="form-group">
                           <label for="tanggal">Tanggal</label>
                           <input type="date" name="tanggal" class="form-control" value="{{$item->tanggal}}">
                           </div>
                           <div class="form-group">
                           <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control ckeditor" rows="6" placeholder="isikan sesuatu">{{$item->deskripsi}}</textarea>
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