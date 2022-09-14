<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Divisi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Pegawai(){
        return $this->hasmany(Pegawai::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\Absen\Database\factories\DivisiFactory::new();
    }
}
