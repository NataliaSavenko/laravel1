@extends('admin/templates/index')

@section('title-page', 'Create Category')

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

    {!! Form::open(['route'=>'categories/store']) !!}

        @include('admin/categories/_form')
       
        {!! Form::submit('Add Category', ['class'=>'btn btn-primary mt-3']) !!}

    {!! Form::close() !!}
@endsection