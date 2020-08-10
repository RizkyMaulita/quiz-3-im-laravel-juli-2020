@extends('layouts.master')

@section('title','Buat Proyek')

@section('content')
<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Create New Proyek</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/proyek" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_proyek"> Nama Proyek </label>
                    <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="{{ old('nama_proyek','') }}" placeholder="Masukkan Nama Proyek">
                    <!-- @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror   -->
                </div>
                  <div class="form-group">
                    <label for="deskripsi_proyek"> Deskripsi Proyek </label>
                    <input type="text" class="form-control" id="deskripsi_proyek" name="deskripsi_proyek" value="{{ old('deskripsi_proyek','') }}" placeholder="Masukkan Deskripsi Proyek">
                    <!-- @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  -->
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai"> Tanggal Mulai </label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ old('tanggal_mulai','') }}" placeholder="Masukkan Tanggal Mulai">
                    <!-- @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  -->
                </div>
                <div class="form-group">
                    <label for="tanggal_deadline"> Tanggal Deadline </label>
                    <input type="date" class="form-control" id="tanggal_deadline" name="tanggal_deadline" value="{{ old('tanggal_deadline','') }}" placeholder="Masukkan Tanggal Deadline">
                    <!-- @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  -->
                </div>
                
                <div class="form-group">
                        <label for="status">Status </label>
                        <select id="status" name="status" class="form-control">
                            <option value="">-- Pilih Status --</option>
                            @if (old('status')==1)
                            <option selected="selected" value="1" >True</option>
                            <option  value="0" > True </option>
                            @else
                            <option value="1" > False </option>
                            <option selected="selected" value="0" >False</option>
                            @endif
                          </select>
                    </div>
                    <!-- @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror -->
             </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
</div>
@endsection