<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Skill;

class SkillRepository implements SkillRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * EloquentBaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Skill $model)
    {
        $this->model = $model;
    }

    /**
     * {@inheritdoc}
     */
    public function get(): Collection
    {
        $resource = $this->model->newQuery()->get();
        return $resource;
    }


}
