<?php

namespace Modules\Pengajuan\Entities;

use App\Models\User;
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
    public function history()
    {
        return $this->belongsTo(HistoriPengajuanBiasa::class);
    }
    public function jabatanrole()
    {
        return $this->belongsTo(Role::class);
    }
}
