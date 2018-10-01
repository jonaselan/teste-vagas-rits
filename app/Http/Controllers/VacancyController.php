<?php

namespace App\Http\Controllers;

use App\Vacancy;
use App\Http\Requests\VacancyRequest;
use App\Repositories\VacancyRepository;

class VacancyController extends Controller
{
    private $repository;
    private $view = 'vacancy.index';

    /**
     * VacancyController constructor.
     * @param VacancyRepository $repository
     */
    public function __construct(VacancyRepository $repository) {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index() {
        $this->msg['fields']['vacancies'] = $this->repository->paginate(self::PAGINATE);

        return view($this->view)->with($this->msg);
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
