<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\VacancyRepository;

class HomeController extends Controller
{
    private $repository;

    public function __construct(VacancyRepository $repository) {
        $this->repository = $repository;
    }

    public function site()
    {
      $this->msg['fields']['vacancies'] = $this->repository->findWhere(['status'=>'aberto']);
      return view('home')->with($this->msg);
    }

    public function admin(){
        return view('home_admin');
    }
}
