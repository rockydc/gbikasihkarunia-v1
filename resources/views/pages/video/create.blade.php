@extends('layouts.video.create')

@section('create-video')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Tambah Video</h3>
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
                           <form action="{{route('video.store')}}" method="post" enctype="multipart/form-data">
                           @csrf

                           <div class="form-group">
                           <label for="video">Nama</label>
                           <input type="text" class="form-control" name="nama" placeholder="masukkan judul video" value="{{old('nama')}}"> 
                           </div>
                           <div class="form-group">
                           <label for="sumberurl">URL</label>
                           <input type="text" class="form-control" name="sumberurl" placeholder="masukkan URL VIdeo" value="{{old('sumberurl')}}"> 
                           </div>
                         
                    
                           <button style="width:300px;" type="submit" class="btn btn-primary btn-block">
                           Simpan
                           </button>
                           </div>

                           </form>

                        </div>
                    </div>
                </div>

@endsection