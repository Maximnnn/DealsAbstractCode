<?php

namespace App\BusinessLogic;

use App\BusinessLogic\Partners\PartnerProvider;
use App\Models\Application;
use App\Repositories\DealRepository;
use App\Services\Mail;
use App\Services\Mailer;

class StoreApplicationWorkFlow
{
    /**
     * @var PartnerProvider
     */
    private $partnerProvider;
    /**
     * @var DealRepository
     */
    private $dealRepository;
    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * StoreApplicationWorkFlow constructor.
     * @param PartnerProvider $partnerProvider
     * @param DealRepository $dealRepository
     * @param Mailer $mailer
     */
    public function __construct(PartnerProvider $partnerProvider, DealRepository $dealRepository, Mailer $mailer)
    {
        $this->partnerProvider = $partnerProvider;
        $this->dealRepository = $dealRepository;
        $this->mailer = $mailer;
    }

    /**
     * @param Application $application
     */
    public function afterStored(Application $application)
    {
        //check partner to send
        //save deals
        //send emails

        foreach ($this->partnerProvider->getPartners() as $partner) {
            if ($partner->needSend($application)) {
                $this->dealRepository->create([
                    'applicationId' => $application->id,
                    'partnerId'     => $partner->id()
                ]);

                $this->mailer->send(new Mail(/*...*/));
            }
        }
    }
}