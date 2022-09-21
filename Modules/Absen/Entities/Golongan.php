<?php

namespace Modules\Absen\Entities;

use Modules\Absen\Entities\Gajipokok;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Golongan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Gajipokok(){
        return $this->hasMany(Gajipokok::class,'golongan_id','id');
    }

    
    protected static function newFactory()
    {
        return \Modules\Absen\Database\factories\GolonganFactory::new();
    }
}
