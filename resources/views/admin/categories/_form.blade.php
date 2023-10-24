<div class="form-group">
    {!! Form::label('name', 'Category name: ') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('description', 'Category description: ') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>