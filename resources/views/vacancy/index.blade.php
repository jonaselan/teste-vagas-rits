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
            @foreach($fields['vacancies'] as $key => $v)
                <tr>
                    <td>{{ $v->title }} </td>
                    <td>{{ $v->location }} </td>
                    <td>{{ $v->candidates->count() }} </td>
                    <td>
                      <div class="row">
                        <div class="col-md-1">
                          {{ Form::model(null, ['method' => 'put', 'route' => ['vacancy.change_status', $v->id]]) }}
                              <input type="text" hidden value="{{$v->status == 'aberto' ? 'fechado' : 'aberto'}}" name="status">
                              <a href="#" onclick="$(this).closest('form').submit()" title="Mudar status">
                                <i class="fas fa-toggle-{{$v->status == 'aberto' ? 'off' : 'on'}}"></i>
                              </a>
                          {!! Form::close() !!}
                        </div>
                        <div class="col-md-1">
                          <a href="{{action('VacancyController@edit', $v->id)}}" title="Editar">
                              <i class="fas fa-pencil-alt"></i>
                          </a>
                        </div>
                        <div class="col-md-1">
                          <a href="{{action('VacancyController@destroy', $v->id)}}" onclick="return confirm('Tem certeza?');" title="Apagar">
                            <i class="fas fa-trash-alt"></i>
                          </a>
                        </div>
                        <div class="col-md-1">
                          <a role="button" data-toggle="modal" class="modal-show" data-target="#candidates-{{ $key }}" href title="Candidatos">
                            <i class="fas fa-users"></i>
                          </a>
                        </div>
                      </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $fields['vacancies']->links() }}

        @each('vacancy.candidates', $fields['vacancies'], 'vacancy')
    @else
      <div class="mt-4 text-center">
        <h2> Não há vagas </h2>
      </div>
    @endif
@stop
