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
        <table class="table table-striped table-bordered table-hover">
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
