<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacancyRequest;
use App\Repositories\VacancyRepository;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    private $repository;

    public function __construct(VacancyRepository $repository) {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index(Request $request) {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $this->msg['fields']['vacancies'] = $this->repository->paginate(self::PAGINATE);

        return view('vacancy.index')->with($this->msg);
    }

    public function create() {
        return view('vacancy.create');
    }

    public function store(VacancyRequest $request) {
        if ($vacancy = $this->repository->create($request->all())) {
            $this->msg['success'][] = "Vaga cadastrada com sucesso!";
        } else {
            $this->msg['error'][] = 'Erro! Vaga não foi cadastrada';
        }

        return redirect()->route('vacancies')
                         ->with($this->msg);
    }

    public function edit(int $id) {
        $this->msg['fields']['vacancy'] = $this->repository->find($id);

        return view('vacancy.edit')->with($this->msg);
    }

    public function update(VacancyRequest $request, $id) {
        $vacancy = $this->repository->update($request->all(), $id);
        if ($vacancy)
            $this->msg['success'][] = "Sucesso! Vaga de $vacancy->title atualizada";
        else
            $this->msg['error'][] = "Erro! Vaga não foi atualizada";

        return redirect()->action('VacancyController@index')
                         ->with($this->msg);
    }

    public function change_status(Request $request, $id){
      $vacancy = $this->repository->update(['status' => $request->status], $id);
      if ($vacancy)
          $this->msg['success'][] = "Status mudado para $request->status";
      else
          $this->msg['error'][] = "Erro ao atualizar status";

      return redirect()->action('VacancyController@index')
                       ->with($this->msg);
    }

    public function destroy($id) {
        try {
            $vacancy = $this->repository->find($id);
            $this->repository->delete($id);
            $this->msg['success'][] = "Sucesso! Vaga de $vacancy->title excluída";
        }
        catch (\Exception $e) {
            $this->msg['error'][] = "Erro! Vaga não foi excluída ".$e->getMessage();
        }

        return redirect()->route('vacancies')
                         ->with($this->msg);
    }
}
