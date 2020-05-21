<?php

namespace App\BusinessLogic\Partners;

use App\Models\Application;

interface PartnerInterface
{
    public function needSend(Application $application): bool;
    public function id(): int;
}