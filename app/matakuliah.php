<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';
	protected $fillabel = ['title','keterangan'];
	
	 public function dosen_matakuliah(){
    	return $this->hasMany(dosen_matakuliah::class);
    }
}
