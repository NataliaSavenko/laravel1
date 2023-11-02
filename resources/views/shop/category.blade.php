@extends('layouts.app')

@section('content')
    <h1>{{$category->name}}</h1>

    <div class="row gy-4">
        @foreach($products as $product)

            <div class="col-md-3">
                @include('shop._product-card')
            </div>

        @endforeach
    </div>
@endsection