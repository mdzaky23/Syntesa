<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoryInventory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function newFactory()
    {
        // return \Modules\Inventory\Database\factories\TambahbarangFactory::new();
    }
    public function History()
    {
        return $this->hasMany(TambahBarang::class);
    }
    public function status()
    {
        return $this->hasMany(StatusInventory::class);
    }
}
