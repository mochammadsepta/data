<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prakerin extends Model
{
    //
    protected $table = 'prakerin';
    protected $fillable = ['nama','kelas','jurusan','jk'];
    protected $visible = ['nama','kelas','jurusan','jk'];
    public $timestamps = true;
}
