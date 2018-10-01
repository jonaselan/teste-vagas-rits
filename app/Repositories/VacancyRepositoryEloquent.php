<?php

namespace App\Repositories;

use App\Vacancy;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace CodeFlix\Repositories;
 */
class VacancyRepositoryEloquent extends BaseRepository implements VacancyRepository, CacheableInterface
{
    use CacheableRepository;
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
        //
    }
}
