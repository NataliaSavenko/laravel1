<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory, Sluggable;


    protected $fillable = ['name', 'descriptions'];

    
    protected function shortDescription(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => Str::words( strip_tags($attributes['descriptions']), 2, '...'),
        );
    }
function products() : HasMany
{
return $this->hasMany(Product::class);
}

public function sluggable(): array    {        
    return [
    'slug' => [
        'source' => 'name'
    ]
];
}
}

