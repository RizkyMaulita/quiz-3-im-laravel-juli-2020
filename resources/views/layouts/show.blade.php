@extends('layouts.master')
@section ('title','Data Proyek')
@section('content')
    <div class="mt-3 ml-3">
        <h2>Nama Proyek : {{ $datashow->nama_proyek}}</h2>
        <h2>Deskripsi : {{ $datashow->deskripsi_proyek}}</h2>
        <h2>Tgl Mulai : {{ $datashow->tanggal_mulai }}</h2>
        <h2>Tgl Deadline : {{ $datashow->tanggal_deadline }}</h2>
        <h2>Status : {{ $datashow->status==1 ? 'True' : 'False' }}</h2>
    </div>
@endsection