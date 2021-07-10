@extends('layouts.komunitas.create')

@section('create-komunitas')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Edit Komunitas {{$item->judul}} >
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
                           <form action="{{route('komunitas.update',$item->id)}}" method="post" enctype="multipart/form-data">
                           @method('put')
                           @csrf

                           <div class="form-group">
                           <label for="judul">Judul</label>
                           <input type="text" class="form-control" name="judul" placeholder="masukkan judul event" value="{{$item->judul}}"> 
                           </div>
                           <div class="form-group">
                           <label for="gambar">Gambar</label>
                           <input type="file" name="gambar" class="form-control">
                            
                           </div>
                           <div class="form-group">
                           <label for="pic">PIC</label>
                           <input type="text" name="pic" value="{{$item->pic}}" placeholder="Bp.Andreas"class="form-control">
                           </div>
                           <div class="form-group">
                           <label for="no_wa">No Whatsapp</label>
                           <input type="text" name="no_wa" placeholder="08788xxxxxx"class="form-control" value="{{$item->no_wa}}">
                           </div>
                           <div class="form-group">
                           <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="6" placeholder="isikan sesuatu">{{$item->deskripsi}}</textarea>
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