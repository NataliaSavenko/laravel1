<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
   public function category(Category $category){
      //$category = Category::where('slug', '=', $slug)->first();
      $products = Product::where('category_id', '=', $category->id)->paginate(12);
      
     return view('shop.category', compact('category', 'products'));
  }

  public function product(Product $product) {


      $products = [];
      if(Session::get('views-product')){
          $products = Session::get('views-product');
      }
      if(!in_array($product->id, $products) && count($products) < 6){
          $products[] = $product->id;
      }
      Session::put('views-product', $products);

      $lastViewsProducts = Product::whereIn('id', $products)->get();

      return view('shop.product', compact('product', 'lastViewsProducts'));
  }
}
