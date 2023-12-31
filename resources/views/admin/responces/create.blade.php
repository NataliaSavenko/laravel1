@extends('admin.templates.index')

@section('title-page', 'Create Responce')

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





  
    {!! Form::open(['route'=>'responces.store']) !!}

        @include('admin.responces._form')
       
        {!! Form::submit('Add Responce', ['class'=>'btn btn-primary mt-3']) !!}

    {!! Form::close() !!}
@endsection