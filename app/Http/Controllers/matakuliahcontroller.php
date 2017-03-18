<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
{
    public function awal()
	{
		return "Hello dari matakuliahcontroller";
	}
	public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$matakuliah = new matakuliah();
		$matakuliah->title = 'Pemograman Framework';
		$matakuliah->keterangan = 'Laravel';
		$matakuliah->save();
		return "DATA MATA KULIAH 
						<br><br> ID : {$matakuliah->id} 
						<br> Title : {$matakuliah->title} 
						<br> keterangan : {$matakuliah->keterangan}  
						<br><br> Telah Di Simpan.";
}
}
