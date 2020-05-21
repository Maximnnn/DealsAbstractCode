<?php

namespace App\Repositories;

use App\BusinessLogic\StoreApplicationWorkFlow;
use App\Models\Model;

class ApplicationRepository extends Repository implements RepositoryInterface
{
    /**
     * @var StoreApplicationWorkFlow
     */
    private $applicationWorkFlow;

    public function __construct(Model $model, StoreApplicationWorkFlow $applicationWorkFlow)
    {
        parent::__construct($model);
        $this->applicationWorkFlow = $applicationWorkFlow;
    }

    public function create(array $data): Model
    {
        $model = parent::create($data);

        $this->applicationWorkFlow->afterStored($model);

        return $model;
    }

}