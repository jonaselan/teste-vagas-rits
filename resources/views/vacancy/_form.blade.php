<div class="form-group">
    {!! Form::label('title', 'Título:') !!} <span class="text-danger">*</span>
    {!! Form::text('title', null, ['class'=> "form-control"]) !!}
</div>

<div class="form-group">
    {!! Form::label('location', 'Localização:') !!} <span class="text-danger">*</span>
    {!! Form::text('location', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('skills', 'Habilidades:') !!} <span class="text-danger">*</span>
    {!! Form::text('skills', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('responsabilities', 'Responsabilidades:') !!} <span class="text-danger">*</span>
    {!! Form::text('responsabilities', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('works', 'Tarefas Diárias:') !!} <span class="text-danger">*</span>
    {!! Form::text('works', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Finalizar', ['class'=>'btn btn-primary']) !!}
</div>
