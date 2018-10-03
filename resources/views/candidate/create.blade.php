 @extends('layouts.site')

@section('content')
  <div id="create-candidate">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="thickness-thick">{{$fields['vacancy']->title}}</h1>
          <p><img src="{{ asset('img/point.png') }}" alt="">
            {{$fields['vacancy']->location}}
          </p>
        </div>
        <div class="col-lg-6">
          <p class="thickness-thick">Na função de <span class="color-green">Desenvolvedor Frontend</span> aqui na Rits, você vai:</p>
          <ul>
            @php($responsabilities = $fields['vacancy']->responsabilities)
            @if ($responsabilities && (strpos($responsabilities, ';') !== false))
              @foreach (explode(';', $responsabilities) as $item)
                <li> {{$item}} </li>
              @endforeach
            @endif
          </ul>

          <p class="thickness-thick">Procuramos <span class="color-green">alguém</span> que:</p>
          <ul>
            @php($skills = $fields['vacancy']->skills)
            @if ($skills && (strpos($skills, ';') !== false))
              @foreach (explode(';', $skills) as $item)
                <li> {{$item}} </li>
              @endforeach
            @endif
          </ul>

          <p class="thickness-thick">No <span class="color-green">dia a dia</span> na Rits, você trabalhará também com:</p>
          <ul>
            @php($works = $fields['vacancy']->works)
            @if ($works && (strpos($works, ';') !== false))
              @foreach (explode(';', $works) as $item)
                <li> {{$item}} </li>
              @endforeach
            @endif
          </ul>
        </div>
      </div>

      {!! Form::open(['route' => 'candidate.store', 'method'=>'post', 'files' => true])!!}
          <h2>Informações pessoais</h2>
          <div class="form-group">
              {!! Form::label('name', 'Nome Completo:') !!} <span class="text-danger">*</span>
              {!! Form::text('name', null, ['class'=> "form-control"]) !!}
          </div>
          <div class="form-group">
              {!! Form::label('email', 'E-mail:') !!} <span class="text-danger">*</span>
              {!! Form::text('email', null, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
              {!! Form::label('phone', 'Telefone (Com DDD):') !!} <span class="text-danger">*</span>
              {!! Form::text('phone', null, ['class'=>'form-control']) !!}
          </div>

          <h2>Carta de apresentação</h2>
          <div class="form-group">
              {!! Form::label('motivation', 'Conte sua motivação:') !!} <span class="text-danger">*</span>
              {!! Form::text('motivation', null, ['class'=>'form-control']) !!}
          </div>

          <h2>Últimas perguntas</h2>
          <div class="form-group">
              {!! Form::label('linkedin', 'Url do seu linkedin:') !!} <span class="text-danger">*</span>
              {!! Form::text('linkedin', null, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
              {!! Form::label('github', 'Url do seu github:') !!} <span class="text-danger">*</span>
              {!! Form::text('github', null, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
              {!! Form::label('english', 'Qual o seu nível de inglês?:') !!} <span class="text-danger">*</span>
              {!! Form::text('english', null, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
              {!! Form::label('desired_salary', 'pretensão salarial:') !!} <span class="text-danger">*</span>
              {!! Form::text('desired_salary', null, ['class'=>'form-control']) !!}
          </div>

          <h2>Anexe seu currículo em PDF ou DOC</h2>
          <div class="form-group">
              {!! Form::label('curriculum', 'pretensão salarial:') !!} <span class="text-danger">*</span>
              {!! Form::file('curriculum') !!}
          </div>

          <div class="form-group">
              {!! Form::submit('Finalizar', ['class'=>'btn btn-primary']) !!}
          </div>

      {!! Form::close() !!}
    </div>
  </div>
@endsection

@push('styles')
    <link href="{{ asset('css/candidate.css') }}" rel="stylesheet">
@endpush
