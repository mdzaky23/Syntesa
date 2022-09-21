<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Waktukerja extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function presensi(){
        return $this->hasMany(Presensi::class,'presensi_id','id');
    }
    
    protected static function newFactory()
    {
        // return \Modules\Absen\Database\factories\WaktukerjaFactory::new();
    }
}
