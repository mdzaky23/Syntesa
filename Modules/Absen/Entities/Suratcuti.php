<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suratcuti extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class,'pegawai_id','id');
    }
    
    public function jabatan(){
        return $this->belongsTo(Jabatan::class,'jabatan_id','id');
    }

    public function divisi(){
        return $this->belongsTo(Divisi::class,'divisi_id','id');
    }

    protected static function newFactory()
    {
        // return \Modules\Absen\Database\factories\SuratcutiFactory::new();
    }
}
