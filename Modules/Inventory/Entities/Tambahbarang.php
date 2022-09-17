<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Inventory\Entities\KategoriBarang;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tambahbarang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function newFactory()
    {
        // return \Modules\Inventory\Database\factories\TambahbarangFactory::new();
    }
    public function kategoribarang()
    {
        return $this->hasMany(KategoriBarang::class);
    }
}
