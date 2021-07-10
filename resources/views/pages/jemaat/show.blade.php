@extends('layouts.jemaat.show')

@section('show-jemaat')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Detail Jemaat</h3>
                    <div class="card shadow">
                     
                    <div class="card-header py-3">
          
                    
                    </div>


                        <div class="card-body">
                        <div class="row">
                        <div class="col-4">
                            <table class="table-responsive">
                           

                            <tr>
                            <td>nama</td>
                            <td>: {{$jemaat->nama}}</td>
                            </tr>
                            <tr>
                            <td>Pekerjaan</td>
                            <td>: {{$jemaat->pekerjaan}}</td>
                            </tr>
                            <tr>
                            <td>No Telepon</td>
                            <td>: {{$jemaat->no_telp}}</td>
                            </tr>
                            <tr>
                            <td>Jenis Kelamin</td>
                            <td>: {{$jemaat->gender}}</td>
                            </tr>
                            <tr>
                            <td>Tanggal Lahir</td>
                            <td>: {{$jemaat->tgl_lahir}}</td>
                            </tr>
                            <tr>
                            <td>Alamat</td>
                            <td>: {{$jemaat->alamat}}</td>
                            </tr>
                            <tr>
                            <td>Status Menikah</td>
                            <td>: {{$jemaat->status_menikah}}</td>
                            </tr>
                            <tr>
                            <td>Tanggal Pernikahan</td>
                            <td>: {{$jemaat->tgl_pernikahan}}</td>
                            </tr>
                            <td>Tanggal Diberkati</td>
                            <td>: {{$jemaat->tgl_diberkati}}</td>
                            </tr>
                            </table>
                            </div>

                        
                           
                            <div class="col-8">
                            <div class="row">
                            <div class="col-6">

                            @if($member->count())
                            @php($number=1)
                            @foreach($member as $member)
                            <table>
                            <tr>
                            <td><h4>Anggota {{$number}}</h4></td>          
                            </tr>
                            <tr>
                            <td>nama Anggota</td>
                            <td>: {{$member->nama_anggota}}</td>
                            <td><tr>
                            
                            <td>Pekerjaan</td>
                            <td>: {{$member->pekerjaan}}</td>
                            </tr></td>
                            </tr>
                            <tr>
                            <td>Gender</td>
                            <td>: {{$member->gender}}</td>
                            </tr>
                            <tr>
                            <td>Tanggal Lahir</td>
                            <td>: {{$member->tgl_lahir}}</td>
                            </tr>
                            <tr>
                            <td>Tanggal Baptis</td>
                            <td>: {{$member->tgl_baptis}}</td>
                            </tr>
                            <tr>
                            <td>Hubungan</td>
                            <td>: {{$member->hubungan}}</td>
                            </tr>
                            <tr>
                            <td>Status Menikah</td>
                            <td>: {{$member->status_menikah}}</td>
                            </tr>
                         
                            @php($number++)
                            </div>
                            </table>
                            @endforeach
                            @endif

                                </div>
                                </div>
           

                           
                            </div>
                        </div>
                    </div>
                </div>

@endsection