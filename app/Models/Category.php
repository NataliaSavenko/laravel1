<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','description'];

    protected function shortDescription(): Attribute

    {

        return Attribute::make(

            get: fn (mixed $value, array $attributes) =>Str::words(strip_tags($attributes['description']),2,'...')

        );

    }
}


