<?php

namespace App\Repositories;

use App\Vacancy;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace CodeFlix\Repositories;
 */
class VacancyRepositoryEloquent extends BaseRepository implements VacancyRepository, CacheableInterface
{
    use CacheableRepository;

    protected $fieldSearchable = [
        'title' => 'like',
        'responsabilities' => 'like',
        'skills' => 'like',
        'location' => 'like'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Vacancy::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
    }
}
