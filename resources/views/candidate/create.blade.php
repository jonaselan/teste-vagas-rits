 @extends('layouts.site')

@section('content')
  <div id="create-candidate">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <h1 class="thickness-thick">{{$fields['vacancy']->title}}</h1>
          <p><img src="{{ asset('img/point2.png') }}" alt="">
            {{$fields['vacancy']->location}}
          </p>
        </div>
        <div class="col-lg-6 vacancy-details">
          <p class="thickness-thick">Na função de <span class="color-green">Desenvolvedor Frontend</span> aqui na Rits, você vai:</p>
          <ul>
            @php($responsabilities = $fields['vacancy']->responsabilities)
            @if ($responsabilities && (strpos($responsabilities, ';') !== false))
              @foreach (explode(';', $responsabilities) as $item)
                <li> {{$item}} </li>
              @endforeach
            @else
              <li> {{ $responsabilities}} </li>
            @endif
          </ul>

          <p class="thickness-thick">Procuramos <span class="color-green">alguém</span> que:</p>
          <ul>
            @php($skills = $fields['vacancy']->skills)
            @if ($skills && (strpos($skills, ';') !== false))
              @foreach (explode(';', $skills) as $item)
                <li> {{$item}} </li>
              @endforeach
            @else
              <li> {{ $skills }} </li>
            @endif
          </ul>

          <p class="thickness-thick">No <span class="color-green">dia a dia</span> na Rits, você trabalhará também com:</p>
          <ul>
            @php($works = $fields['vacancy']->works)
            @if ($works && (strpos($works, ';') !== false))
              @foreach (explode(';', $works) as $item)
                <li> {{$item}} </li>
              @endforeach
            @else
              <li> {{ $works }} </li>
            @endif
          </ul>
        </div>
      </div>

      <div class="candidate-form">
        {!! Form::open(['route' => 'candidate.store', 'method'=>'post', 'files' => true])!!}
        {{ Form::hidden('vacancy_id', $fields['vacancy']->id)}}
        <h2>Informações pessoais</h2>
        <div class="form-group">
          {!! Form::label('name', 'Nome Completo:') !!} <span class="required-fields-candidate">*</span>
          {!! Form::text('name', null, ['class'=> "form-control"]) !!}
          <small class="color-red">{{($errors->has('name') ? $errors->first('name') : '')}}</small>
        </div>
        <div class="form-group">
          {!! Form::label('email', 'E-mail:') !!} <span class="required-fields-candidate">*</span>
          {!! Form::text('email', null, ['class'=>"form-control"]) !!}
          <small class="color-red">{{($errors->has('email') ? $errors->first('email') : '')}}</small>
        </div>
        <div class="form-group">
          {!! Form::label('phone', 'Telefone (Com DDD):') !!} <span class="required-fields-candidate">*</span>
          {!! Form::text('phone', null, ['class'=>"form-control"]) !!}
          <small class="color-red">{{($errors->has('phone') ? $errors->first('phone') : '')}}</small>
        </div>

        <h2>Carta de apresentação</h2>
        <div class="form-group">
          {!! Form::label('motivation', 'Conte sua motivação:') !!}
          {!! Form::textarea('motivation', null, ['class'=>'form-control']) !!}
        </div>

        <h2>Últimas perguntas</h2>
        <div class="form-group">
          {!! Form::label('linkedin', 'Url do seu Linkedin:') !!} <span class="required-fields-candidate">*</span>
          {!! Form::text('linkedin', null, ['class'=>"form-control"]) !!}
          <small class="color-red">{{($errors->has('linkedin') ? $errors->first('linkedin') : '')}}</small>
        </div>
        <div class="form-group">
          {!! Form::label('github', 'Url do seu Github:') !!} <span class="required-fields-candidate">*</span>
          {!! Form::text('github', null, ['class'=>"form-control"]) !!}
          <small class="color-red">{{($errors->has('github') ? $errors->first('github') : '')}}</small>
        </div>
        <div class="form-group">
          {!! Form::label('english', 'Qual o seu nível de inglês?:') !!} <span class="required-fields-candidate">*</span>
          {!! Form::select('english', ['básico' => 'básico', 'intermediario' => 'intermediario', 'avançado' => 'avançado'],
                                      null, ['placeholder' => '', 'class' => 'form-control']) !!}
          {{-- {!! Form::text('english', null, ['class'=>"form-control ".($errors->has('english') ? 'field-required' : '')]) !!} --}}
          <small class="color-red">{{($errors->has('english') ? $errors->first('english') : '')}}</small>
        </div>
        <div class="form-group">
          {!! Form::label('desired_salary', 'Pretensão salarial:') !!} <span class="required-fields-candidate">*</span>
          {!! Form::text('desired_salary', null, ['class'=>"form-control"]) !!}
          <small class="color-red">{{($errors->has('desired_salary') ? $errors->first('desired_salary') : '')}}</small>
        </div>

        <h2>Anexe seu currículo em PDF ou DOC</h2>
        <div class="form-group">
          {!! Form::label('curriculum_file', 'Pretensão salarial:') !!} <span class="required-fields-candidate">*</span><br>
          <label for="file-upload" class="input-curriculum">
              Escolher arquivo
          </label>
          <input id="file-upload" name="curriculum_file" type="file"/><br>
          <small class="color-red">{{($errors->has('curriculum') ? $errors->first('curriculum') : '')}}</small>
        </div>

        <div class="form-group">
          {!! Form::submit('enviar', ['class'=>'btn btn2']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection

@push('styles')
    <link href="{{ asset('css/candidate.css') }}" rel="stylesheet">
@endpush
