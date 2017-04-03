<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
	protected $table = 'mahasiswa';
	protected $fillabel = ['nama','nim','alamat','pengguna_id'];

		public function pengguna()
		{
			return $this->belongsTo(pengguna::class);
		}
		public function jadwal_matakuliah(){
			return $this->hasMany(jadwal_matakuliah::class);
		}
}
