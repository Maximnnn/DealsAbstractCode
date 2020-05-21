<?php

namespace App\Repositories;

use App\BusinessLogic\UpdateDealWorkFlow;
use App\Models\Model;

class DealRepository extends Repository implements RepositoryInterface
{
    /**
     * @var UpdateDealWorkFlow
     */
    private $dealWorkFlow;

    /**
     * DealRepository constructor.
     * @param Model $model
     * @param UpdateDealWorkFlow $dealWorkFlow
     */
    public function __construct(Model $model, UpdateDealWorkFlow $dealWorkFlow)
    {
        parent::__construct($model);
        $this->dealWorkFlow = $dealWorkFlow;
    }

    /**
     * @param array $data
     * @param $id
     * @return Model
     */
    public function update(array $data, $id): Model
    {
        $old = $this->show($id);
        $this->dealWorkFlow->onUpdateDeal($old, new $this->model);

        return /*...*/;
    }
}