@extends('layouts.admin')

@section('content')
    @include('shared.messages')

    <div class="row">
      <div class="col-md-10">
        <h1>Currículos (candidatos)</h1>
      </div>
    </div>

    @if($fields['candidates']->count())
        <table class="mt-4 table table-striped table-bordered table-hover">
            <tr>
                <th>Candidato</th>
                <th>Vaga concorrida</th>
                <th>Data de cadastro</th>
                <th>Opções</th>
            </tr>
            @foreach($fields['candidates'] as $key => $c)
                <tr>
                    <td>{{ $c->name }} </td>
                    <td>{{ $c->vacancy->title }} </td>
                    <td>{{ date("d-m-Y", strtotime($c->created_at)) }} </td>
                    <td>
                      <div class="row">
                        <div class="col-md-1">
                          <a role="button" data-toggle="modal" class="modal-show" data-target="#details-{{ $key }}" href title="Details">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                        <div class="col-md-1">
                          <a href="{{action('CandidateController@destroy', $c->id)}}" onclick="return confirm('Tem certeza?');">
                              <i class="fas fa-trash-alt"></i>
                          </a>
                        </div>
                        <div class="col-md-1">
                          <a href="{!! route('candidate.curriculum', ['path' => base64_encode($c->curriculum)]) !!}">
                              <i class="fas fa-file"></i>
                          </a>
                        </div>
                      </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $fields['candidates']->links() }}

        @each('candidate.show', $fields['candidates'], 'candidate')
    @else
      <div class="mt-4 text-center">
        <h2> Não há curriculos cadastrados </h2>
      </div>
    @endif
@stop
