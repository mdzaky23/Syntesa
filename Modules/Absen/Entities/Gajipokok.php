<?php

namespace Modules\Absen\Entities;

use Modules\Absen\Entities\Golongan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gajipokok extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function golongan(){
        return $this->belongsTo(Golongan::class,'golongan_id','id');
    }

    protected static function newFactory()
    {
        // return \Modules\Absen\Database\factories\GajipokokFactory::new();
    }
}
