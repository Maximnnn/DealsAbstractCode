<?php

declare(strict_types=1);

namespace App\Requests;

use Psr\Http\Message\ServerRequestInterface;

class ApplicationStoreRequest extends AbstractRequest
{
    public function getValidated(): array
    {
        $this->validate([
            'email' => 'required|email',
            'sum'   => 'required|int|min:1'
        ], $this->post());

        return [
            'email' => $this->get('email'),
            'sum'   => $this->get('sum')
        ];
    }
}