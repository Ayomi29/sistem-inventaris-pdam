<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['type', 'brand'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
    public function maintenance()
    {
        return $this->hasOne(Maintenance::class);
    }
}
