<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table ='dosen';
	protected $fillabel = ['nama','nip','alamat'];
	
		public function pengguna(){
			return $this->belongsTo(pengguna::class);
		}
		public function dosen_matakuliah(){
			return $this->hasMany(dosen_matakuliah::class);
		}
		public function hw_getUsernameAttribute(){
			return $this->pengguna->username;
		}
		public function listDosenDanNip()
		{
			$out = [];
			foreach ($this->all() as $dsn) {
				$out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
			}
			return $out;
		}
}
