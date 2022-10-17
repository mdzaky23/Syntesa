<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusInventory extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function status()
    {
        return $this->belongsTo(HistoryInventory::class);
    }
}
