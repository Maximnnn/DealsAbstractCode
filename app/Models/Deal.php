<?php

namespace App\Models;

/**
 * Class Deal
 * @package App\Models
 *
 * @property $partnerId int
 * @property $applicationId int
 * @property $status string
 * @property $id int
 */
class Deal extends Model
{
    const STATUS_ASK = 'ask';
    const STATUS_OFFER = 'offer';

    protected $statuses = ['ask', 'offer'];

    public function __construct(array $params = [])
    {
        $status = $params['status'] ?? self::STATUS_ASK;

        if (!in_array($status, $this->statuses)) {
            throw new \Exception('status not allowed');
        }

        $params = [
            'partnerId' => $params['partnerId'] ?? 0,
            'applicationId' => $params['applicationId'] ?? 0,
            'status' => $status
        ];
        parent::__construct($params);
    }
}