<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoriPengajuanProjek extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function histori()
    {
        return $this->hasMany(KeteranganJabatan::class);
    }
}
