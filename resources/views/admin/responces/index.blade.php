@extends('admin.templates.index')

@section('title-page', 'Responces')

@section('content')

    <a href="{{route('responces.create')}}" class="btn btn-primary mb-5">Create responce</a>

    <table class="table table-bordered">
        <thead>
        <th>#</th>
        <th>name</th>
        <th>email</th>
        <th>content</th>
        <th>rate</th>
        
    </thead>
        <tbody>
            @foreach ($responces as $resp)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$resp->name}}</td>
            <td>{{$resp->email}}</td>
            <td>{{$resp->content}}</td>
            <td>{{$resp->rate}}</td>
           
                   
        </tr>
        @endforeach
        </tbody>
       
        
    </table>

    <a>Count: </a>
    <a>{{$num}}</br></a>
    <a>Avg: </a>
    <a>{{$avgRate}}</a>


@endsection