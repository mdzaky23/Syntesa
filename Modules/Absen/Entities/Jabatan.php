<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jabatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Pegawai(){
        return $this->hasmany(Pegawai::class);
    }

    public function Uangsaku(){
        return $this->hasmany(Uangsaku::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\Absen\Database\factories\JabatanFactory::new();
    }
}
