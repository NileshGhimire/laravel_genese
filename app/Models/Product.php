<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_desc',
        'image',
        'price'
    ];
protected $attributes =[
    'image' => ' ',
];

protected $with = ['category'];
public function category(){
    // hasOne, hasMany, belongsTo, belongsToMany 
return $this->belongsTo(Category::class);
}

}
