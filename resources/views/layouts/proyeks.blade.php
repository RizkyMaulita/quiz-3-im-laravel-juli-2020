@extends('layouts.master')

@section('title','Data Proyek')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Proyek Table</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Informasi!</h5>
                        {{session('success')}}
                    </div>
                @endif
                <a href="/proyek/create" class="btn btn-primary mb-3">Create Proyek</a>
                <table class="table table-bordered">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama Proyek</th>
                        <th>Deskripsi</th>
                        <th>Tgl Mulai</th>
                        <th>Tgl Deadline</th>
                        <th>Status</th>
                        <th style="width: 40px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $key => $d)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{ $d->nama_proyek}}</td>
                                <td>{{ $d->deskripsi_proyek}}</td>
                                <td>{{ $d->tanggal_mulai}}</td>
                                <td>{{ $d->tanggal_deadline}}</td>
                                <td>{{ $d->status }}</td>
                                <td style="display: flex;">
                                    <a href="/proyek/{{$d->id}}" class="btn btn-sm btn-primary">Show</a>
                                    <a href="/proyek/{{$d->id}}/daftarkan-manager" class="btn btn-sm btn-secondary">Daftarkan Manager</a>
                                    <a href="/proyek/{{$d->id}}/daftarkan-staff" class="btn btn-sm btn-success">Daftarkan Staff</a>
                                    <a href="/proyek/{{$d->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="/proyek/{{$d->id}}" method="POST">        
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7"><center>No Data</center></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
@endsection

@push('scripts')
<script src="{{asset('sbadmin2/js/swal.min.js')}}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush