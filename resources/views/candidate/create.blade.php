Na função de Desenvolvedor Frontend aqui na Rits, você vai:

Procuramos alguém que:

No dia a dia na Rits, você trabalhará também com:


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