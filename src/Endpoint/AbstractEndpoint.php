<?php

declare(strict_types=1);

namespace FacadeClient\Endpoint;

use FacadeClient\Client\Client;
use FacadeClient\Exception\FacadeRequestException;
use FacadeClient\Factory\FacadeResponseFactory;
use FacadeClient\Request\FacadeRequestInterface;
use FacadeClient\Response\FacadeResponseInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractEndpoint implements EndpointInterface
{
    public function __construct(readonly private Client $client)
    {
    }

    /**
     * @throws FacadeRequestException
     */
    public function makeRequest(FacadeRequestInterface $request, array $options = []): FacadeResponseInterface
    {
        return $this->processResponse(
            $this->client->send($request, $options)
        );
    }

    protected function processResponse(ResponseInterface $response): FacadeResponseInterface
    {
        return (new FacadeResponseFactory())->create($response);
    }
}
