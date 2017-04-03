<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
	protected $fillabel = ['dosen_id','matakuliah_id'];

	public function dosen()
	{
    	return $this->belongsToMany(dosen::class);
    }

    public function jadwal_matakuliah(){
    	return $this->hasMany(jadwal_matakuliah::class);

    public function matakuliah()
    {
    	return $this->belongsToMany(matakuliah::class);
    }
}
