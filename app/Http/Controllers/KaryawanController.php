<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class KaryawanController extends Controller{
    public function index(){
        $karyawan = DB::table('karyawan')->select()->get();
        return view('layouts.karyawan', compact('karyawan'));
    }
    public function create(){
        return view('layouts.createkaryawan');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required'
        ]);
        DB::table('karyawan')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);

        return redirect('/proyek/{id}/daftarkan-manager')->with('status', 'Data Karyawan Berhasil Disimpan!');
    }
    public function destroy($id)
	{
		$query = DB::table('karyawan')->where('id', $id)->delete();

		return redirect('/proyek/{{$d->id}}/daftarkan-manager')->with('success', 'Delete Data Berhasil');
	}
}
