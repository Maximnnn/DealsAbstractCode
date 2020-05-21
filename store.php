<?php
require_once 'vendor/autoload.php';

$controller = new \App\Controllers\ApplicationsController();
$mailer = new \App\Services\Mailer();
$result = $controller->store(
    new \App\Requests\ApplicationStoreRequest(),
    new \App\Repositories\ApplicationRepository(
        new \App\Models\Application(), new \App\BusinessLogic\StoreApplicationWorkFlow(
            new \App\BusinessLogic\Partners\PartnerProvider(),
            new \App\Repositories\DealRepository(new \App\Models\Deal(), new \App\BusinessLogic\UpdateDealWorkFlow($mailer)),
            $mailer
        )
    )
);

echo json_encode($result);
