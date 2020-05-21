<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Repositories\ApplicationRepository;
use App\Requests\ApplicationStoreRequest;

class ApplicationsController
{
    /**
     * @param ApplicationStoreRequest $request
     * @param ApplicationRepository $applicationRepository
     * @return mixed
     */
    public function store(ApplicationStoreRequest $request, ApplicationRepository $applicationRepository)
    {
        return $applicationRepository->create($request->getValidated());
    }
}