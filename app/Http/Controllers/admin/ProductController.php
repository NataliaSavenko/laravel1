<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$products=Product::with('category')->get();
        $products=Product::all();
        return view('admin/products/index', compact ('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all()->pluck('name', 'id');
        $recomendedProducts=Product::all()->pluck('name', 'id');
        return view('admin/products/create', compact ('categories','recomendedProducts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {


       $product=Product::create($request->all());
       if($request->image)
       {
            $path=$request->file('image')->store('uploads');
            $product->image=$path;
            $product->save();
       }

$product->recomended()->sync($request->recomended);



       return to_route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

  




    public function edit( Request $request, Product $product)
    {
        if ($request->image) 
        {
    
     $product->postUpload();
    
        }
        

           
        $categories=Category::all()->pluck('name', 'id');
        return view('admin/products/edit', compact('product','categories')); 
                

          
       


         
    }


  
    public function postUpload(Request $request,Product $product)
    {
      
        
        if($product->image)
        {
            Storage::delete($product->image);
        }
        $product=Product::create($request->all());
       if($request->image)
       {
            $path=$request->file('image')->store('uploads');
            $product->image=$path;
            $product->save();
       }

    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        if($product->image)
        {
            Storage::delete($product->image);
        }

               return to_route('products.index');
    }

    
    /*public function productDetails(Product $product)
    {
        $product=Product::all();
       return view('admin.products.index', [
            'product' => $product
        ]);
    }*/






}
