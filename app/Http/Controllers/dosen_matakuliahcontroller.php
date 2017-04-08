<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;
use App\dosen;
use App\matakuliah;

class dosen_matakuliahcontroller extends Controller
{
	protected $informasi = 'Gagal melakukan aksi';
     public function awal(){
     	$semuadosen_matakuliah = dosen_matakuliah::all();
    	return view('dosen_matakuliah.awal', compact('semuadosen_matakuliah'));
    }
public function tambah(){
	$dosen = new dosen;
	$matakuliah = new matakuliah;
	return view('dosen_matakuliah.tambah', compact('dosen','matakuliah'));
	return $this->simpan();
	}
public function simpan(Request $input){
	$dosen_matakuliah = new dosen_matakuliah($input->only('dosen_id','matakuliah_id'));
	if ($dosen_matakuliah->save()) $this->informasi = 'Matakuliah dan Dosen Mengajar Berhasil disimpan';
	return redirect('dosen_matakuliah')->with(['informasi' => $this->informasi]);
}

public function lihat($id) {
	$dosen_matakuliah = dosen_matakuliah::find($id);
	return view('dosen_matakuliah.lihat', compact('dosen_matakuliah'));
}

public function edit($id) {
	$dosen_matakuliah = dosen_matakuliah::find($id);
	$dosen = new dosen;
	$matakuliah = new matakuliah;
	return view('dosen_matakuliah.edit', compact('dosen','matakuliah','dosen_matakuliah'));
	}

public function update($id, Request $input){
	$dosen_matakuliah = dosen_matakuliah::find($id);
	$dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
		if ($dosen_matakuliah->save()) $this->informasi = 'Matakuliah dan Dosen Mengajar berhasil diperbaharui';
	return redirect('dosen_matakuliah')->with(['informasi' => $this->informasi]);
}
public function hapus($id){
	$dosen_matakuliah = dosen_matakuliah::find($id);
		if ($dosen_matakuliah->delete()) $this->informasi = 'Matakuliah dan Mahasiswa berhasil dihapus';
	return redirect('dosen_matakuliah')->with(['informasi'=> $this->informasi]);
}

}
