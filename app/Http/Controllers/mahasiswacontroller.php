<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal()
	{
		return "Hello dari mahasiswacontroller";
	}
	public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$mahasiswa = new mahasiswa();
		$mahasiswa->nama = 'Nirmala Adjeng Wulandari';
		$mahasiswa->nim = '1515015227';
		$mahasiswa->alamat = 'Perum. Bumi Sempaja';
		$mahasiswa->pengguna_id ='2';
		$mahasiswa->save();
		return "DATA MAHASISWA 
						<br><br> ID : {$mahasiswa->id} 
						<br> Nama : {$mahasiswa->nama} 
						<br> NIM : {$mahasiswa->nim} 
						<br> Alamat : {$mahasiswa->alamat} 
						<br><br> Telah Di Simpan.";
}
}