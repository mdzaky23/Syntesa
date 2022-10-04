<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Uangtunjangan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class,'jabatan_id','id');
    }

    
    protected static function newFactory()
    {
        // return \Modules\Absen\Database\factories\UangtunjanganFactory::new();
    }
}
