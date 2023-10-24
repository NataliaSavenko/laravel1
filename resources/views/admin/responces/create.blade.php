

@extends('admin/templates/index')

@section('title-page', 'Responce')

@section('content')

{!! Form::open(['route'=>'responces/store']) !!}

@include('admin/responces/_form')

{!! Form::submit('Add Responce', ['class'=>'btn btn-primary mt-3']) !!}

{!! Form::close() !!}
   
      



/

@endsection


