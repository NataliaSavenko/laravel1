
@extends('templates.main')
@section('content')
  
<h1>Zajava</h1>


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




<form action="{{route ('zajava')}}" method="post">

    <!-- токен-->
@csrf 
<div> Форма заявки на роботу в зоопарку</div>
<label>Будь ласка, заповніть форму. Обов'язкові поля помічені *</label>
<div>
    <label>Контактна інформація</label>

    <label for="name">Ім'я*</label>
    <input type="text" name="name">
    @error('name')
    <div class="invalid-feedback">{{$message}}
    </div>
    @enderror

    <div>
        <label for="telephone">Телефон (+38 (xxx) xxx-xx-xx)</label>
        <input type="text" name="telephone" id="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{old('telephone')}}" >
        @error('telephone')
        <div class="invalid-feedback">{{$message}}
    
        </div>
        @enderror
    
    </div>  


    <div>
        <label for="email">Email*</label>
        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" >
        @error('email')
        <div class="invalid-feedback">{{$message}}
    
        </div>
        @enderror
    
    </div>  
   
</div>



<div>
    <label>Персональна інформація</label>
    <label for="age">Вік*</label>
    <input type="number" name="age">
    @error('age')
    <div class="invalid-feedback">{{$message}}
    </div>
    @enderror

    <div>
        <label for="sex">Стать</label>

        <select name="sex" multiple id="sex" class="form-control @error('sex') is-invalid @enderror" value="{{old('sex')}}">
            <option  value="male">male</option>
            <option  value="female">female</option>
          
            </select>
            
        
        @error('sex')
        <div class="invalid-feedback">{{$message}}
    
        </div>
        @enderror
    
    </div>  


    <div>
        <label for="message">Перелічіть особові якості</label>
        <textarea name="message" id="message" class="form-control @error('email') is-invalid @enderror" >{{old('message')}}</textarea>
        @error('message')
        <div class="invalid-feedback">{{$message}}
    
        </div>
        @enderror
    
    </div>


    <div>
        <label for="animals">Виберіть улюблених тварин</label><br>

        <input type="checkbox" name="animals[]" value="Зебра">Зебра
        <input type="checkbox" name="animals[]" value="Кошак">Кошак
        <input type="checkbox" name="animals[]" value="Анаконда">Анаконда
        <input type="checkbox" name="animals[]" value="Людина">Людина<br>

        <input type="checkbox" name="animals[]" value="Слон">Слон
        <input type="checkbox" name="animals[]" value="Антилопа">Антилопа
        <input type="checkbox" name="animals[]" value="Голуб">Голуб
        <input type="checkbox" name="animals[]" value="Краб">Краб<br>


                   
        
        @error('animals')
        <div class="invalid-feedback">{{$message}}
    
        </div>
        @enderror
    
    </div>  






    
   
</div>










<button class="btn btn-primary" name="sendZajava">Відправити інформацію</button>

</form>


@endsection
