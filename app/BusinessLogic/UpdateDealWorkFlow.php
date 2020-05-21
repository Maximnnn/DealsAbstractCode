<?php

namespace App\BusinessLogic;

use App\Models\Deal;
use App\Services\Mail;
use App\Services\Mailer;

class UpdateDealWorkFlow
{
    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * UpdateDealWorkFlow constructor.
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param Deal $old
     * @param Deal $new
     */
    public function onUpdateDeal(Deal $old, Deal $new)
    {
        if ($old->status === Deal::STATUS_ASK && $new->status === Deal::STATUS_OFFER) {
            $this->mailer->send(new Mail(/*...*/));
        }
    }
}