<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table ='dosen';
	protected $fillabel = ['id','nama','nip','alamat','pengguna_id','created_at','updated_at'];
}
