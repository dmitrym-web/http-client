<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

use FacadeClient\Response\FacadeResponse;
use Psr\Http\Message\ResponseInterface;

class FacadeResponseFactory implements FacadeResponseFactoryInterface
{
    public function create(ResponseInterface $response): FacadeResponse
    {
        return (new FacadeResponse($response->getStatusCode(), $response->getBody()->getContents()));
    }
}
