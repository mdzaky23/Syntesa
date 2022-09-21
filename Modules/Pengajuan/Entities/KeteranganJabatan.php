<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KeteranganJabatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function jabatan()
    {
        return $this->belongsTo(PengajuanBiasa::class);
    }
}
