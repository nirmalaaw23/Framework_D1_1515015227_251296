<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
	protected $fillabel = ['id','dosen_id','matakuliah_id','created_at','updated_at'];
}
