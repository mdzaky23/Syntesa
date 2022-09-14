<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presensi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Pegawai(){
        return $this->belongsTo(Pegawai::class);
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class,'jabatan_id','id');
    }

    public function divisi(){
        return $this->belongsTo(Divisi::class,'divisi_id','id');
    }



    protected static function newFactory()
    {
        // return \Modules\Absen\Database\factories\PresensiFactory::new();
    }
}
