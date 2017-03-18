<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal()
	{
		return "Hello dari dosencontroller";
	}
	public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$dosen = new dosen();
		$dosen->nama = 'Nirmala Adjeng Wulandari';
		$dosen->nip = '1115015227';
		$dosen->alamat = 'Perum. Sempaja';
		$dosen->pengguna_id ='1';
		$dosen->save();
		return "DATA DOSEN 
						<br><br> ID : {$dosen->id} 
						<br> Nama : {$dosen->nama} 
						<br> NIP : {$dosen->nip} 
						<br> Alamat : {$dosen->alamat} 
						<br><br> Telah Di Simpan.";
					}
				}