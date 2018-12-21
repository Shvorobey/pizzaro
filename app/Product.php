<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public function items ()
    {
        return $this->hasMany(Item::class);
    }
    public function menus ()
    {
        return $this->belongsTo(Menu::class);
    }
}
