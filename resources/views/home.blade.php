@extends('layouts.site')

@section('content')

    <section class="header">
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
                        <button class="btn btn1">+ sobre a gente</button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button class="btn btn2">confira as vagas</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="about-rits">
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
                    <div class="col-md-6 col-6">
                        <button class="btn btn1">Valores da gente</button>
                    </div>
                    <div class="col-md-6 col-6">
                        <button class="btn btn2">confira as vagas</button>
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

    <section class="values">
        <h1> NOSSOS VALORES </h1>
        {{-- NUNCA DEIXE A EQUIPE NA MÃO --}}
        {{-- “All for one and one for all, united we stand divided we fall.” --}}
        {{-- Alexandre Dumas, The Three Musketeers --}}

        {{-- OLHOS NA TAREFA E CABEÇA NA SOLUÇÃO --}}
        {{-- “Sword Of Omens, give me sight beyond sight.” --}}
        {{-- Buzz Lightyear, Toy Story --}}

        {{-- FAÇA ACONTECER --}}
        {{-- “Do. Or do not. There is no try.” --}}
        {{-- Master Yoda, The Empire Strikes Back --}}

        {{-- FALHE RÁPIDO, MELHORE MAIS RÁPIDO AINDA --}}
        {{-- “To infinity… and beyond!” --}}
        {{-- Buzz Lightyear, Toy Story --}}

        {{-- SAIBA OU APRENDA --}}
        {{-- “Be water, my friend.” --}}
        {{-- Bruce Lee --}}
    </section>

    <section class="vacancies">
        <h1>VAGAS EM ABERTO</h1>
        <p>Conheça as oportunidades que temos em aberto.</p>
    </section>

@endsection
