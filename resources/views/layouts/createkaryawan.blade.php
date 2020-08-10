@extends('layouts.master')

@section('title','Buat Proyek')

@section('content')
<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Daftarkan Nama Manager</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/proyek/{id}/daftarkan-manager" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama','') }}" placeholder="Masukkan Nama Manager">
                    <!-- @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror   -->
                </div>
                  <div class="form-group">
                    <label for="jabatan"> Jabatan </label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="Manager">
                </div>
                <!-- <div class="form-group">
                        <label for="jabatan"> Jabatan </label>
                        <select id="status" name="jabatan" class="form-control">
                            <option value="">-- Pilih Status --</option>
                            @if (old('jabatan')=="manager")
                            <option selected="selected" value="staff" >Staff</option>
                            <option  value="staff" > Staff </option>
                            @else
                            <option value="manager" > Manager </option>
                            <option selected="selected" value="manager" >Manager</option>
                            @endif
                          </select>
                    </div> -->
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