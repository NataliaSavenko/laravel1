<div class="form-group">
    {!! Form::label('name', 'Product name: ') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('price', 'Product price: ') !!}
    {!! Form::text('price', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group mt-3">
    {!! Form::label('amount', 'Product amount: ') !!}
    {!! Form::number('amount', null, ['class'=>'form-control']) !!}
</div>



<div class="form-group mt-3">
    {!! Form::label('category_id', 'Product category_id: ') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
</div>


<div class="form-group mt-3">
    {!! Form::label('image', 'Product image: ') !!}
    {!! Form::file('image', ['class'=>'form-control']) !!}
</div>