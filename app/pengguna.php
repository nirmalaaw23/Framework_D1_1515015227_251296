<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];

    public function dosen()
    {
        return $this->hasOne(dosen::class,'pengguna_id');
    }
    
    public function mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class,'pengguna_id');
    }

    public function peran()
    {
        return $this->belongsToMany(peran::class, 'pengguna_id');
    }
    
}

