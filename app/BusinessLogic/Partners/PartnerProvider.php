<?php

namespace App\BusinessLogic\Partners;

class PartnerProvider
{
    /**
     * @return PartnerInterface[]
     */
    public function getPartners(): array
    {
        return [
            new PartnerA(),
            new PartnerB()
        ];
    }
}