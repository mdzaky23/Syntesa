<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Srtabsen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected static function newFactory()
    {
        // return \Modules\Absen\Database\factories\SrtabsenFactory::new();
    }
}
