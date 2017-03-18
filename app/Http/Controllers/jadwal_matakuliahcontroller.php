<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahcontroller extends Controller
{
    public function awal()
	{
		return "Hello dari jadwalmatakuliahcontroller";
	}
	public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$jadwal_matakuliah = new jadwal_matakuliah();
		$jadwal_matakuliah->mahasiswa_id = '123';
		$jadwal_matakuliah->ruangan_id = '311';
		$jadwal_matakuliah->dosen_matakuliah_id = '211';
		$jadwal_matakuliah->save();
		return "DATA RUANGAN 
						<br><br> ID : {$jadwal_matakuliah->id} 
						<br> ID Mahasiswa : {$jadwal_matakuliah->mahasiswa_id}
						<br> ID Ruangan : {$jadwal_matakuliah->ruangan_id}
						<br> ID Dosen Mata Kuliah : {$jadwal_matakuliah->dosen_matakuliah_id}  
						<br><br> Telah Di Simpan.";
}
}