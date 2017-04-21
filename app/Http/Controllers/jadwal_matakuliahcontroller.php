<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
use App\mahasiswa;
use App\dosen_matakuliah;
use App\ruangan;
use App\Http\Requests\JadwalMatakuliahRequest;

class jadwal_matakuliahcontroller extends Controller
{
	protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
    	$semuajadwal_matakuliah = jadwal_matakuliah::all() ;
        // dd($semuajadwal_matakuliah->dosen->nama);
    	return view('jadwal_matakuliah.awal', compact('semuajadwal_matakuliah'));
    }
    public function tambah()
    {
    	$mahasiswa = new mahasiswa;
    	$ruangan = new ruangan;
    	$dosen_matakuliah = new dosen_matakuliah;
    	return view('jadwal_matakuliah.tambah', compact('mahasiswa','ruangan','dosen_matakuliah'));
    }
    public function simpan(JadwalMatakuliahRequest $input)
    {
    	$jadwal_matakuliah = new jadwal_matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
    	if($jadwal_matakuliah->save()) $this->informasi = "Jadwal Mahasiswa Berhasil disimpan";
    	return redirect('jadwal_matakuliah')->with(['informasi'=> $this->informasi]);
    }

    public function edit($id)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        $mahasiswa = new mahasiswa;
        $ruangan = new ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwal_matakuliah.edit', compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_matakuliah'));
    }

     public function lihat($id)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah' =>$jadwal_matakuliah));
    }

    public function update($id, JadwalMatakuliahRequest $input)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        $jadwal_matakuliah->ruangan_id = $input->ruangan_id;
        $jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
        $informasi = $jadwal_matakuliah->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }

    public function hapus($id, request $input)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        $informasi = $jadwal_matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }
}
    
