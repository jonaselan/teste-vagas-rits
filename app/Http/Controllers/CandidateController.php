<?php

namespace App\Http\Controllers;

use App\Vacancy;
use App\Repositories\CandidateRepository;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CandidateRequest;

class CandidateController extends Controller
{
    private $repository;

    public function __construct(CandidateRepository $repository) {
        $this->middleware('auth', ['except' => ['create', 'store']]);
        $this->repository = $repository;
    }

    public function index() {
        $this->msg['fields']['candidates'] = $this->repository->with(['vacancy'])->paginate(self::PAGINATE);

        return view('candidate.index')->with($this->msg);
    }

    public function update($id, $status) {
      // transaction para caso ocorra algum erro dar um rollback
        DB::transaction(function () use ($status, $id){
          // se o status for modificado com sucesso..
          if ($this->repository->update(['status' => $status], $id)) {
            // mudar o status da vaga também
            if ($status == 'contratado') {
              $vacancy = $this->repository->find($id)->vacancy;
              $vacancy->update(['status' => 'fechado']);
            }
          }
        });

        return redirect()->action('CandidateController@index')
                         ->with($this->msg);
    }

    public function create(string $id){
      $this->msg['fields']['vacancy'] = Vacancy::find($id);
      
      return view('candidate.create')->with($this->msg);
    }

    public function store(CandidateRequest $request){
      $candidate = $this->repository->create($request->all());
      // if ($candidate = $this->repository->create($request->all())) {
      //     $this->msg['success'][] = "Vaga cadastrada com sucesso!";
      // } else {
      //     $this->msg['error'][] = 'Erro! Vaga não foi cadastrada';
      // }

      return redirect()->action('HomeController@site');
    }

}
