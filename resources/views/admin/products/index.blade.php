@extends('admin.templates.index')

@section('content')
<a href="{{route('products.create')}}">Create Product</a>


<table class="table table-bordered">
    <thead>
    <th>#</th>
    <th>name</th>
    <th>price</th>
    <th>amount</th>
    <th>category_id</th>
    <th>image</th>
    <th>actions</th>
   
    
</thead>
    <tbody>
        @foreach ($products as $product)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->amount}}</td>
        <td>{{$product->category->name}}</td>
        <td><img src="{{asset('storage/' . $product->image)}}" alt=""></td>
        <td>
        <a href="{{route('products.edit', ['product'=>$product->id])}}" class="btn btn-warning">Edit</a>

        {!! Form::open([
            'route' => ['products.destroy', $product->id],
            'method' => 'delete'
         ]) !!}
         
        <button class="btn btn-danger">Delete</button>
        
        {!! Form::close() !!}</td>
       
       
     
    </tr>
    @endforeach
    </tbody>
   
    
</table>

    

    
@endsection