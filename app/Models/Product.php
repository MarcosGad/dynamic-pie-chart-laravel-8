<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Product extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'products';
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'product_type' => [
                'source' => 'name'
            ]
        ];
    }
}
