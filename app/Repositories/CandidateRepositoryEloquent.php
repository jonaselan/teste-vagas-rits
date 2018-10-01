<?php

namespace App\Repositories;

use App\Candidate;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace CodeFlix\Repositories;
 */
class CandidateRepositoryEloquent extends BaseRepository implements CandidateRepository, CacheableInterface
{
    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Candidate::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        //
    }
}
