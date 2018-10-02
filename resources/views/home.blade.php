@extends('layouts.site')

@section('content')

    <section id="header-rits">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="header-info">
                <h1>
                    Venha fazer <span class="color-green">parte</span> do nosso
                    <span class="color-green">time</span>!
                </h1>
                <p class="header-description">
                    Se você gosta de estar em constante aprendizado, trabalhar
                    em equipe e está sempre disposto a contribuir com melhorias nos
                    projetos que participa, temos uma oportunidade para você.
                </p>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <a class="btn btn1">+ sobre a gente</a>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <a class="btn btn2">confira as vagas</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about-rits">
      <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1> A RITS </h1>
                <p>
                  A Rits é uma empresa focada no desenvolvimento de produtos digitais, como aplicativos,
                  sistemas em nuvem e websites de alta complexidade e no outsourcing de TI, com equipes
                  preparadas para atender todas as necessidades da sua empresa. Usamos a metodologia ágil
                  e provamos que inteligência de negócio, alta qualidade e entrega rápida podem caminhar
                  juntos. Nosso objetivo é um só: tirar o seu projeto digital do papel.<br/> <br/>
                  Somos uma empresa
                  de desenvolvimento de softwares, mas vamos além: trabalhamos com consultoria de negócios
                  para oferecer as melhores possibilidades de transformar seus projetos em realidade.
                </p>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6">
                        <a class="btn btn1">Valores da gente</a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6">
                        <a class="btn btn2">confira as vagas</a>
                    </div>
                </div>
            </div>
            <div class="offset-md-1 col-md-5 mt-5">
              <div class="">
                <h2>
                    Para entregar com <span class="color-green">alta qualidade</span> e rapidez, trabalhamos com
                    <span class="color-green">inteligência</span> e metodologias ágeis de <span class="color-green">desenvolvimento</span>.
                </h2>
              </div>
            </div>
        </div>
      </div>
    </section>

    <section id="values-rits">
      <div class="values-mosaic">
        <img src="{{asset('img/mosaic.png')}}" alt="">
      </div>
      <div class="container">
        <div class="col-12 offset-md-0 offset-lg-3">
          <div class="col-12">
            <h1> NOSSOS VALORES </h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">NUNCA DEIXE A EQUIPE NA MÃO</p>
                  <p class="card-quote">“All for one and one for all, united we stand divided we fall.”</p>
                  <p class="card-author">Alexandre Dumas, The Three Musketeers</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">OLHOS NA TAREFA E CABEÇA NA SOLUÇÃO</p>
                  <p class="card-quote">“Sword Of Omens, give me sight beyond sight.”</p>
                  <p class="card-author">Buzz Lightyear, Toy Story</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">FAÇA ACONTECER</p>
                  <p class="card-quote">“Do. Or do not. There is no try.”</p>
                  <p class="card-author">Master Yoda, The Empire Strikes Back</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">FALHE RÁPIDO, MELHORE MAIS RÁPIDO AINDA</p>
                  <p class="card-quote">“To infinity… and beyond!”</p>
                  <p class="card-author">Buzz Lightyear, Toy Story</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">SAIBA OU APRENDA</p>
                  <p class="card-quote">“Be water, my friend.”</p>
                  <p class="card-author">Bruce Lee</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="vacancies-rits">
      <div class="container">
        <div class="row justify-content-center">
            <h1>VAGAS EM ABERTO</h1>
        </div>
        <div class="row justify-content-center">
          <p>Conheça as oportunidades que temos em aberto.</p>
        </div>
        <div class="row justify-content-center">
          @foreach($fields['vacancies'] as $v)
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-9">
                    <p class="card-title">{{ $v->title }}</p>
                    <p class="card-text"><img src="{{ asset('img/point.png') }}" alt="">
                      {{ $v->location }}
                    </p>
                  </div>
                  <div class="col-lg-3">
                    <a href="{{action('CandidateController@create', $v->id) }}" class="btn btn2">candidate-se</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

@endsection
