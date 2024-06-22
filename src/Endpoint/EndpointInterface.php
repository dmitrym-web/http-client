<?php

declare(strict_types=1);

namespace FacadeClient\Endpoint;

use FacadeClient\Exception\FacadeRequestException;
use FacadeClient\Request\FacadeRequestInterface;
use FacadeClient\Response\FacadeResponseInterface;

interface EndpointInterface
{
    /**
     * @throws FacadeRequestException
     */
    public function makeRequest(FacadeRequestInterface $request, array $options = []): FacadeResponseInterface;
}
