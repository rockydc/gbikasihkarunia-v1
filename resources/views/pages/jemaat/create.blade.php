@extends('layouts.jemaat.create')

@section('create-jemaat')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Tambah Jemaat</h3>
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
                           <form action="{{route('jemaat.store')}}" method="post" enctype="multipart/form-data">
                           @csrf

                           <div class="form-group">
                           <label for="nama">Nama</label>
                           <input type="text" class="form-control" name="nama" placeholder="masukkan nama" value="{{old('nama')}}"> 
                           </div>
                           <div class="form-group">
                           <label for="pekerjaan">Pekerjaan</label>
                           <input type="text" class="form-control" name="pekerjaan" placeholder="masukkan nama" value="{{old('pekerjaan')}}"> 
                           </div>
                           <div class="form-group">
                           <label for="no_telp">no_telp</label>
                           <input type="text" class="form-control" name="no_telp" placeholder="masukkan no_telepon" value="{{old('no_telepon')}}"> 
                           </div>
                            <div class="form-group ">
                                <label class="" for="gender">Jenis Kelamin</label>
                                <select class="custom-select" name="gender">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                                
                            </select>
                                </div>

                           <div class="form-group">
                           <label for="tgl_lahir">tanggal Lahir</label>
                           <input type="date" name="tgl_lahir" class="form-control">
                           </div>
                           
                           <div class="form-group">
                          
                           <div class="form-group">
                           <label for="alamat">Alamat</label>
                            <textarea  name="alamat" class="form-control" rows="6" placeholder="Alamat"></textarea>
                           </div>
                           <label>Status Kawin</label>
                           <div class="container">
                           <input class="status" type="radio"  id="belum_sts"  name="status_kawin" value="belum menikah"
                                        >
                                <label for="belum">Belum Menikah</label>


                                <input type="radio" class="ml-5 status" id="sudah_sts" name="status_kawin" value="sudah menikah"
                                    >
                                <label for="sudah_sts">Sudah Menikah</label>
                           </div>

                           </div>
                        <div id="tambahanfield">
                     
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