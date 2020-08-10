<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class ProyekController extends Controller{
    public function index(){
        $data = DB::table('proyek')->select()->get();
        return view('layouts.proyeks', compact('data'));
    }
    public function create(){
        return view('layouts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required',
            'deskripsi_proyek' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_deadline' => 'required',
            'status' => 'required'
        ]);

        DB::table('proyek')->insert([
            'nama_proyek' => $request->nama_proyek,
            'deskripsi_proyek' => $request->deskripsi_proyek,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_deadline' => $request->tanggal_deadline,
            'status' => $request->status
        ]);

        return redirect('/proyek')->with('status', 'Proyek Berhasil Disimpan!');
    }
    public function show($id)
    {
        $datashow = DB::table('proyek')->where('id',$id)->first();
        return view('layouts.show', compact('datashow'));
    }
    public function edit($id)
    {
        $dataedit = DB::table('proyek')->where('id',$id)->first();
        return view('layouts.edit', compact('dataedit'));
    }
    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama_proyek' => 'required',
            'deskripsi_proyek' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_deadline' => 'required',
            'status' => 'required'
        ]);
        $proyek = DB::table('proyek')->where('id',$id)->update([
            'nama_proyek' => $request['nama_proyek'],
            'deskripsi_proyek' => $request['deskripsi_proyek'],
            'tanggal_mulai' => $request['tanggal_mulai'],
            'tanggal_deadline' => $request['tanggal_deadline'],
            'status' => $request['status']
        ]);
        return redirect('/proyek')->with('success', 'Data Proyek Berhasil Diupdate');
    }
    // public function daftarstaff($id)
    // {
    //     // $manager = DB::table('manager')->select()->get();
    //     $karyawans = DB::table('karyawan')->select()->get();
    //     return view('layouts.daftar_staff', compact('karyawans'));
    // }
    public function destroy($id)
	{
		$query = DB::table('proyek')->where('id', $id)->delete();

		return redirect('/proyek')->with('success', 'Delete Data Berhasil');
	}
}