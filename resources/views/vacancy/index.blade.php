@extends('layouts.admin')

@section('content')
    @include('shared.messages')

    <div class="row">
      <div class="col-md-10">
        <h1>Vagas</h1>
      </div>
      <div class="col-md-2">
        <a href="{{ action('VacancyController@create')}}">Criar vaga</a>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        Filtro
      </div>
      <div class="card-body">
        {!! Form::open(['route' => ['vacancies'], 'method'=>'get'])!!}
          <div class="form-group">
            {!! Form::label('term', 'Termo: ') !!}
            {!! Form::text('search', null, ['class'=>'form-control',
              'placeholder' => 'Título, responsabilidades, habilidades, localização']) !!}
          </div>

          <div class="form-group">
            {!! Form::submit('Buscar', ['class'=>'btn btn-primary']) !!}
          </div>
        {!! Form::close() !!}

      </div>
    </div>
    @if($fields['vacancies']->count())
        <table class="mt-4 table table-striped table-bordered table-hover">
            <tr>
                <th>Titulo</th>
                <th>Local</th>
                <th>Número de candidatos</th>
                <th>Opções</th>
            </tr>
            @foreach($fields['vacancies'] as $v)
                <tr>
                    <td>{{ $v->title }} </td>
                    <td>{{ $v->location }} </td>
                    <td>{{ $v->candidates->count() }} </td>
                    <td>
                        {{-- <a href="{{action('VacancyController@show', $v->id)}}">
                            <i class="fas fa-eye-alt"></i>
                        </a> --}}
                        <a href="{{action('VacancyController@edit', $v->id)}}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="{{action('VacancyController@destroy', $v->id)}}" onclick="return confirm('Tem certeza?');">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $fields['vacancies']->links() }}
    @else
      <div class="mt-4 text-center">
        <h2> Não há vagas </h2>
      </div>
    @endif
@stop
