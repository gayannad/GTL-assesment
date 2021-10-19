<?php

namespace App\Repositories;

use App\Models\Runner;
use Illuminate\Database\Eloquent\Model;

class RunnerRepository extends BaseRepository
{
    /**
     * @param Runner $model
     */
    public function __construct(Runner $model)
    {
        parent::__construct($model);
    }
}
