<?php

namespace App\BusinessLogic\Partners;

use App\Models\Application;

class PartnerA implements PartnerInterface
{

    /**
     * @param Application $application
     * @return bool
     */
    public function needSend(Application $application): bool
    {
        return $application->sum > 5000;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return 1;
    }
}