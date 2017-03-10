<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataPeserta extends Model
{
    //protected $fillable = ['namaPeserta', 'jk', 'tglLahir', 'asalSekolah', 'slug'];
    protected $guarded = ['idpeserta'];
    public $table = "datapeserta";
    protected $primaryKey = "idpeserta";
}
