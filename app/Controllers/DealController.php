<?php

namespace App\Controllers;

use App\Models\Deal;
use App\Repositories\DealRepository;

class DealController
{
    /**
     * @param DealRepository $dealRepository
     * @param int $dealId
     * @return \App\Models\Model
     */
    public function offerDeal(DealRepository $dealRepository, int $dealId)
    {
        return $dealRepository->update(['status' => Deal::STATUS_OFFER], $dealId);
    }

}