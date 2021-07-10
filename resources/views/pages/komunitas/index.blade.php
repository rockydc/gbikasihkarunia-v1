@extends('layouts.komunitas.index')

@section('content-komunitas')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Komunitas</h3>
                    <div class="card shadow">
                        <div class="card-header py-3"><a class="btn btn-primary" href="{{route('komunitas.create')}}">Tambah Komunitas</a></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <!-- <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
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
                                            <th>Judul</th>
                                            <th>PIC</th>
                                            <th>gambar</th>
                                            <th>Deskripsi</th>
                                            <th>No HP</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($items as $item)
                                        <tr>
                                          
                                            <td>{{$item->judul}}</td>
                                            <td>
                                            <img src="{{Storage::url($item->gambar)}}"
                                             alt="gambar-event" style="width:150px;" class="img-thumbnail"> 
                                            </td>
                                            <td>{{$item->deskripsi}}</td>
                                            <td>{{$item->pic}}</td>
                                            <td>{{$item->no_wa}}</td>
                                            <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                            <a class="btn btn-info" href="{{route('komunitas.edit',$item->id)}}"><i class="fa fa-pencil">
                                                
                                                </i></a>
                                            <form action="{{route('komunitas.destroy',$item->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger ml-3">
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