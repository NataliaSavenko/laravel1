@extends('admin.templates.index')

@section('title-page', 'Edit Product')

@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif




    {!! Form::model($product, ['route'=>['products.update', $product->id], 'method'=>'put']) !!}

        @include('admin.products._form')

        {!! Form::submit('Save Product', ['class'=>'btn btn-primary mt-3']) !!}

    {!! Form::close() !!}
@endsection