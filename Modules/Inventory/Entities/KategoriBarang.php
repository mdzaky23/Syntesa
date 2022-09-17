<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Inventory\Entities\Tambahbarang;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBarang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function newFactory()
    {
        // return \Modules\Inventory\Database\factories\KategoriBarangFactory::new();
    }
    public function tambahbarang()
    {
        return $this->belongsTo(Tambahbarang::class);
    }
}
