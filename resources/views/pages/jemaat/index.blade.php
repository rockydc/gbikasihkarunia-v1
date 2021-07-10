@extends('layouts.jemaat.index')

@section('content-jemaat')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Jemaat</h3>
                    <div class="card shadow">
                        <div class="card-header py-3"><a class="btn btn-primary" href="{{route('jemaat.create')}}">Tambah Jemaat</a></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <!-- <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm" id="limit">
                                                <option value="1" selected="">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div> -->
                                </div>

                                <div class="col-md-6">
                                <form action="{{url()->current()}}
                                ">
                                
                                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" name="keyword" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label>
                                <button type="submit" class="btn btn-primary">
                                       <i class="fa fa-search"></i>
                                    </button>

                                </div>
                                </div>
                               
                                </form>
                                   
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Pekerjaan</th>
                                            <th>no_telp</th>
                                            <th>tgl_lahir</th>
                                            <th>Alamat</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 
                                        @forelse($items as $item)
                                        <tr>
                                          
                                            <td>{{$item->nama}}</td>
                                     
                                            <td>{{$item->pekerjaan}}</td>
                                            <td>{{$item->no_telp}}</td>
                                            <td>{{$item->tgl_lahir}}</td>
                                            <td>{{$item->alamat}}</td>
                                            <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                            <a class="btn btn-primary mr-2"href="{{route('jemaat.show',$item->id)}}"><i class="fa fa-search">
                                                
                                                </i></a>
                                            <a class="btn btn-info mr-2"href="#"><i class="fa fa-pencil">
                                                
                                                </i></a>

  
                                            <form action="#" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                            <i class="fa fa-trash">
                                                
                                                </i>
                                            </button>
                                          
                                            </form>
                                            </div>
                                        
                                            </td>
                                        </tr>
                                     @empty
                                     <div class="text-center">
                                        <p>data kosong</p>
                                        </div>
                                        
                                        
                                        @endforelse
                                    </tbody>
                                    
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to {{$items->count()}} of {{$items->total()}}</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                        {!! $items->links() !!}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection