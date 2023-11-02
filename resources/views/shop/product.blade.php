@extends('layouts.app')

@section('content')
    
    @include('shop._product-card')

    <h2 class="mt-4">Last Views Products</h2>
    <div class="row">
        @foreach( $lastViewsProducts as $item )
            <div class="col-md-2">
                @include('shop._product-card', ['product' => $item])
            </div>
        @endforeach
    </div>

    


    <h2 class="mt-4">Recommended Products</h2>
    <div class="row">
        @foreach( $product->recommended as $product )
            <div class="col-md-3">
                @include('shop._product-card')
            </div>
        @endforeach
    </div>




@endsection
