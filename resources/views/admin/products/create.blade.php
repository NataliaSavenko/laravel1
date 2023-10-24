@extends('admin/templates/index')

@section('title-page', 'Create Product')

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

    {!! Form::open(['route'=>'products.store','files'=>true]) !!}

        @include('admin.products._form')
       
        {!! Form::submit('Add Product', ['class'=>'btn btn-primary mt-3']) !!}

    {!! Form::close() !!}
@endsection