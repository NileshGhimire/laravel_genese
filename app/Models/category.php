<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class category extends Model
{
    public function products(){
        return $this->hasMany(Product::class);
    }
}
