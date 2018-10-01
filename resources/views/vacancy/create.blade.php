@extends('layouts.app')

@section('content')
  <h1>Registrar vaga</h1>

  <div class="container">
    @include('shared.messages')

    {!! Form::open(['route' => 'vacancy.store', 'method'=>'post'])!!}
        @include('vacancy._form')
    {!! Form::close() !!}
  </div>
@stop
