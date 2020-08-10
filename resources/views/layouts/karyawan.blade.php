@extends('layouts.master')

@section('title','Data Karyawan')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Karyawan</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Informasi!</h5>
                        {{session('success')}}
                    </div>
                @endif
                <a href="/proyek/{id}/daftarkan-manager/create" class="btn btn-primary mb-3">Masukkan Nama Karyawan</a>
                <table class="table table-bordered">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama Karyawan</th>
                        <th>Jabatan</th>
                        <th style="width: 40px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($karyawan as $key => $k)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{ $k->nama}}</td>
                                <td>{{ $k->jabatan}}</td>
                                <td style="display: flex;">
                                    <a href="/proyek/{id}/daftarkan-manager/create" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="/proyek/{id}/daftarkan-manager" method="POST">        
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"><center>No Data</center></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
@endsection
