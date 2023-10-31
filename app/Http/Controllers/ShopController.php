<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
   public function category(Category $category)
   {
   // slug-строка
    //$category=Category::where('slug', '=', $slug)->first(); 
    $product=Product::where('category_id', '=', $category->id)->paginate(10); 
    //return $slug;
    return view('shop.category', compact('category', 'products'));
   }
}
