@extends('layouts.app')

@section('content')
  <h1>Editar Vaga</h1>

  <div class="container">
    @include('shared.messages')

    {{ Form::model($fields['vacancy'], ['method' => 'put', 'route' => ['vacancy.update', $fields['vacancy']->id]]) }}
        @include('vacancy._form')
    {!! Form::close() !!}
  </div>
@stop
