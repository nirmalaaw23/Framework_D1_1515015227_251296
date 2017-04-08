<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
	
	protected $table = 'mahasiswa';
	protected $fillabel = ['nama','nim'];

		public function pengguna()
		{
			return $this->belongsTo(pengguna::class);
		}
		public function jadwal_matakuliah(){
			return $this->hasMany(jadwal_matakuliah::class);
		}
		public function getUsernameAtribute(){
			return $this->pengguna->username;
		}
		public function listMahasiswaDanNim()
		{
		$out= [];
		foreach ($this->all() as $mhs) {
			$out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
		}
		return $out;
	}
}
