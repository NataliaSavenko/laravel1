
<form>
<table class="table table-bordered">
    <div>
        <label for="name">Name*:</label>
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
        <label for="content">Content*:</label>
        <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" >{{old('content')}}</textarea>
        @error('content')
        <div class="invalid-feedback">{{$message}}
    
        </div>
        @enderror
    
    </div>
    
    
    <div>
        <label for="rate">Rate*:</label>
        <textarea name="rate" id="rate" class="form-control @error('rate') is-invalid @enderror" >{{old('rate')}}</textarea>
        @error('rate')
        <div class="invalid-feedback">{{$message}}
    
        </div>
        @enderror
    
    </div>
    
    </form>




 

@endsection