@extends('layouts.persembahan.create')

@section('create-persembahan')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Edit Persembahan {{$item->nama}} </h3>
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
                           <form action="{{route('persembahan.update',$item->id)}}" method="post" enctype="multipart/form-data">
                           @method('put')
                           @csrf

                           <div class="form-group">
                           <label for="nama">Nama</label>
                           <input type="text" class="form-control" name="nama" placeholder="masukkan nama Rekening" value="{{$item->nama}}"> 
                           </div>
                           
                           <div class="form-group">
                           <label for="no_rek">No Rekening</label>
                           <input type="text" name="no_rek" placeholder="masukkan no rekening"class="form-control" value="{{$item->no_rek}}">
                           </div>
                                                      
                           <div class="form-group">
                           <label for="atas_nama">Atas Nama</label>
                           <input type="text" name="atas_nama" placeholder="BCA Kasih karunia"class="form-control" value="{{$item->atas_nama}}">
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