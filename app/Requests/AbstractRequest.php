<?php

declare(strict_types=1);

namespace App\Requests;

use Illuminate\Http\Request;

abstract class AbstractRequest extends Request
{
    abstract public function getValidated(): array;
}