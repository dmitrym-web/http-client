<?php

declare(strict_types=1);

namespace FacadeClient\Endpoint;

use FacadeClient\Client\Client;
use FacadeClient\Exception\FacadeRequestException;
use FacadeClient\Factory\FacadeResponseFactory;
use FacadeClient\Request\FacadeRequestInterface;
use Psr\Http\Message\ResponseInterface;
use FacadeClient\Response\FacadeResponse;

abstract class AbstractEndpoint
{
    public function __construct(readonly private Client $client)
    {
    }

    /**
     * @throws FacadeRequestException
     */
    public function makeRequest(FacadeRequestInterface $request, array $options = []): FacadeResponse
    {
        return $this->processResponse(
            $this->client->send($request, $options)
        );
    }

    protected function processResponse(ResponseInterface $response): FacadeResponse
    {
        return (new FacadeResponseFactory())->create($response);
    }
}
