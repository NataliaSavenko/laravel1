@extends('admin.templates.index')

@section('content')
<a href="{{route('products.create')}}">Create Product</a>

@foreach ($products as $product)

<p><img src="{{asset('storage/' . $product->image)}}" alt="">, {{$product->category->name}}</p>

    
@endforeach
    
@endsection