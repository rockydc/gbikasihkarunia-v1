@extends('layouts.komunitas.create')

@section('create-komunitas')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Tambah Komunitas</h3>
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
                           <form action="{{route('komunitas.store')}}" method="post" enctype="multipart/form-data">
                           @csrf

                           <div class="form-group">
                           <label for="judul">Judul</label>
                           <input type="text" class="form-control" name="judul" placeholder="masukkan judul komunitas" value="{{old('judul')}}"> 
                           </div>
                           <div class="form-group">
                           <label for="gambar">Gambar</label>
                           <input type="file" name="gambar" class="form-control">
                            </textarea>
                           </div>
                           <div class="form-group">
                           <label for="pic">PIC</label>
                           <input type="text" name="pic" placeholder="Bp.Andreas"class="form-control">
                           </div>
                           <div class="form-group">
                           <label for="no_wa">No Whatsapp</label>
                           <input type="text" name="no_wa" placeholder="08788xxxxxx"class="form-control">
                           </div>
                           <div class="form-group">
                           <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="6" placeholder="isikan sesuatu"></textarea>
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