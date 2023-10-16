
@extends('templates.main')
@section('content')
    


<h1>{{$title}}</h1>


@foreach ($categories as $category)

   <p>{{$category->name}},{{$category->descriptions}}</p>

    
@endforeach


@endsection
