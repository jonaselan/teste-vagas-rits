@extends('layouts.app')

@section('content')
    @include('shared.messages')

    @if($fields['vacancies'])
        <div class="row">
            <div class="col-md-10">
                <h1>Todas as vaga</h1>
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

            {!! Form::open(['route' => ['vacancy.filter'], 'method'=>'post'])!!}
              <div class="form-group">
                  {!! Form::label('term', 'Título ou habilidade: ') !!}
                  {!! Form::text('term', null, ['class'=>'form-control',
                                'placeholder' => 'ex: frontend']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('status', 'Status: ') !!} <br/>
                  Todos {!! Form::checkbox('status', 'all', true); !!}
                  Em aberto {!! Form::checkbox('status', 'open', false); !!}
                  Fechados {!! Form::checkbox('status', 'close', false); !!}
              </div>

              <div class="form-group">
                  {!! Form::submit('Buscar', ['class'=>'btn btn-primary']) !!}
              </div>
            {!! Form::close() !!}

          </div>
        </div>

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
        <h2> Não há vagas </h2>
    @endif
@stop
