<div class="form-group">
    {!! Form::label('name', 'Category name: ') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('descriptions', 'Category description: ') !!}
    {!! Form::textarea('descriptions', null, ['class'=>'form-control']) !!}
</div>