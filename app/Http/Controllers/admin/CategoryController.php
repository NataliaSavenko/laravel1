<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$model = Category::where('name', '=', 'Category 1')->orWhere('name', '=', 'Category 2')->first();
        //dd($model);

        $categories = Category::paginate(3);
        return view('admin.categories.index', compact('categories'));
    }
    /*protected function showCategory(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => Str::words( strip_tags($attributes['category'])),
        );
    }*/
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,name',
            'description' => 'nullable|string|min:3'
        ]);

        // $category = new Category();
        // $category->name = $request->name;
        // $category->description = $request->description;
        // $category->save();
        Category::create($request->all());
        return to_route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin/categories/edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,name,' . $category->id,
            'description' => 'nullable|string|min:3'
        ]);

        // $category->name = $request->name;
        // $category->description = $request->description;
        // $category->save();

        $category->update($request->all());
        return to_route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.index');
    }
}