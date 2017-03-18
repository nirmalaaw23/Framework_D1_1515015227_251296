<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
{
    public function awal()
	{
		return "Hello dari ruangancontroller";
	}
	public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$ruangan = new ruangan();
		$ruangan->title = '411 A';
		$ruangan->save();
		return "DATA RUANGAN 
						<br><br> ID : {$ruangan->id} 
						<br> Title : {$ruangan->title}  
						<br><br> Telah Di Simpan.";
}
}