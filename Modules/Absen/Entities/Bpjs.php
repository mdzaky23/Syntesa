<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bpjs extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }
    
    protected static function newFactory()
    {
        // return \Modules\Absen\Database\factories\BpjsFactory::new();
    }
}
