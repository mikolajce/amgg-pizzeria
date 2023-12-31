<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPizza extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function size(){
        return $this->belongsTo(Size::class);
    }

    public function pizza(){
        return $this->belongsTo(Pizza::class);
    }
}
