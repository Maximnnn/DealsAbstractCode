<?php

namespace App\Models;

class Model implements \JsonSerializable
{
    /**
     * @var array
     */
    private $params;

    /**
     * Model constructor.
     * @param array $params
     */
    public function __construct(array $params = [])
    {
        $this->params = $params;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return $this->params;
    }

    public function __get($name)
    {
        return $this->params[$name] ?? null;
    }
}