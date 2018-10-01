<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
          \App\User::create([
              'name' => 'admin',
              'email' => 'admin@email.com',
              'password' => bcrypt('123123'),
              'remember_token' => str_random(10),
          ]);

          $vacancy = \App\Vacancy::create([
            'title' => 'Desenvolvedor Frontend',
            'responsabilities' => 'Transformar layouts (XD e Photoshop) em montagens responsivas utilizando HTML + CSS + JS; Integrar montagem com APIs desenvolvidas por outras equipes; Manter e melhorar a base de código existente corrigindo bugs e refatorando código quando necessário.',
            'location' => 'Natal - RN - Brasil',
            'skills' => 'Possua habilidades arquiteturais para desenvolvimento de software; Goste de trabalhar em equipe; Seja focado, proativo, tenha boa comunicação e relacionamento interpessoal.',
            'works' => 'WordPress e sistemas em PHP em geral; Webpack e Bootstrap; Frameworks javascript modernos (Vue 2, React).'
          ]);

          \App\Candidate::create([
            'name' => 'Zeca',
            'email' => 'zeca@email.com',
            'phone' => '1122334455',
            'motivation' => 'Achei a vaga interessante',
            'linkedin' => 'https://www.linkedin.com/in/zequinha',
            'github' => 'https://www.github.com/zequinha',
            'desired_salary' => 1.000,
            'curriculum' => 'link',
            'english' => 'básico',
            'vacancy_id' => $vacancy->id
          ]);
        });
    }
}
