<?php

namespace Modules\Absen\Entities;

use Modules\Absen\Entities\Gajipokok;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class,'jabatan_id','id');
    }

    public function divisi(){
        return $this->belongsTo(Divisi::class,'divisi_id','id');
    }

    public function jenispegawai(){
        return $this->belongsTo(Jenispegawai::class,'jenispegawai_id','id');
    }

    public function golongan(){
        return $this->belongsTo(Golongan::class,'golongan_id','id');
    }

    public function gajipokok(){
        return $this->belongsTo(Gajipokok::class,'golongan_id','id');
    }

    public function pendidikan(){
        return $this->belongsTo(Pendidikan::class,'pendidikan_id','id');
    }

    public function uangsaku(){
        return $this->belongsTo(Uangsaku::class,'uangsaku_id','id');
    }


    public function presensi(){
        return $this->hasMany(Presensi::class,'presensi_id','id');
    }

    public function suratcuti(){
        return $this->hasMany(Suratcuti::class);
    }

    public function bpjs(){
        return $this->hasMany(Bpjs::class);
    }

    // public function user(){
    //     return $this->belongsTo('user_id','id');
    // }

    
    protected static function newFactory()
    {
        // return \Modules\Absen\Database\factories\PegawaiFactory::new();
    }
}
