<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

use Psr\Http\Message\ResponseInterface;

interface FacadeResponseFactoryInterface
{
    public function create(ResponseInterface $response);
}
