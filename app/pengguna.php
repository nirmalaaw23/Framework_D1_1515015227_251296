<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;


class pengguna extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table ='pengguna';
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

