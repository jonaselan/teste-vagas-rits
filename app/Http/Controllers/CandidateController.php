<?php

namespace App\Http\Controllers;

use App\Repositories\CandidateRepository;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    private $repository;

    public function __construct(CandidateRepository $repository) {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index() {
        $this->msg['fields']['candidates'] = $this->repository->paginate(self::PAGINATE);

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

}
