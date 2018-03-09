<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface SkillRepositoryInterface
{
    /**
     * Get a collection of models matching criteria
     *
     * @return Collection
     */
    public function get(): Collection;
}
