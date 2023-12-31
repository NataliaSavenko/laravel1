<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;


    
    protected $with=['category', 'recommended'];



    protected $fillable=['name', 'price', 'amount', 'category_id'];

    function category():BelongsTo {
        return $this-> belongsTo(Category::class);

    }

    public function sluggable(): array    {        
        return [
        'slug' => [
            'source' => 'name'
        ]
    ];
    }

    function recommended() {

        return $this-> belongsToMany(Product::class,'recommended_products','product_id','recommended_id');

    }

}

