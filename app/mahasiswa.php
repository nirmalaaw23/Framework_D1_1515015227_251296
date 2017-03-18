<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
	protected $table = 'mahasiswa';
	protected $fillabel = ['id','nama','nim','alamat','pengguna_id'];
}
