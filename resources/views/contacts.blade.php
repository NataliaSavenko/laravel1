


@extends('templates.main')
@section('content')
  
<h1>Contacts</h1>




@if(session('success'))

<div class="alert alert-success">
    {{session('success')}}
</div>

@endif



<!--@if ($errors->any())

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif-->




<form action="{{route ('sendEmail')}}" method="post">

    <!-- токен-->
@csrf 

<div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" >
        
    @error('name')
    <div class="invalid-feedback">{{$message}}

    </div>
    @enderror

</div>

<div>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" >
    @error('email')
    <div class="invalid-feedback">{{$message}}

    </div>
    @enderror

</div>

<div>
    <label for="message">Message:</label>
    <textarea name="message" id="message" class="form-control @error('email') is-invalid @enderror" >{{old('message')}}</textarea>
    @error('message')
    <div class="invalid-feedback">{{$message}}

    </div>
    @enderror

</div>

<button class="btn btn-primary" name="sendEmail" >Send</button>

</form>


@endsection


