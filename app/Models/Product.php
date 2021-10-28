<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillabel = [
        'name',
        'price',
        'description',
        'slug',
    ];

    public function galeries() {
        return $this->hasMany(ProductGalery::class, 'products_id', 'id');
    }
}
