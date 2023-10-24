@extends('admin.templates.index')

@section('title-page', 'Edit Category')

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

    {!! Form::model($category, ['route'=>['categories.update', $category->id], 'method'=>'put']) !!}

        @include('admin.categories._form')

        {!! Form::submit('Save Category', ['class'=>'btn btn-primary mt-3']) !!}

    {!! Form::close() !!}
@endsection