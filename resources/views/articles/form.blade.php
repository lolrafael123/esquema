<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
</div>

<div class="form-group">
    {!! Form::label('disciplina', 'Disciplina:') !!}
    {!! Form::text('disciplina', null, ['class' => 'form-control', 'rows' => '1']) !!}
</div>

<div class="form-group">
    {!! Form::label('sala', 'Sala:') !!}
    {!! Form::text('sala', null, ['class' => 'form-control', 'rows' => '1']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Data:') !!}
    {!! Form::input('date', 'published_at', date('m/d/Y'), ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY']) !!}
</div>


<div class="form-group">
    {!! Form::submit($submitButtonName, ['class' => 'btn btn-primary']) !!}
</div>

