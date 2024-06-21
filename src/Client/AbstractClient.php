<?php

declare(strict_types=1);

namespace FacadeClient\Client;

use FacadeClient\Exception\FacadeRequestException;
use FacadeClient\Factory\FacadeClientFactory;
use FacadeClient\Factory\SettingClient;
use FacadeClient\Request\FacadeRequestInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractClient
{
    private Client $client;

    public function __construct(public SettingClient $setting)
    {
        $this->client = (new FacadeClientFactory())->create($this->setting);
    }

    /**
     * @throws FacadeRequestException
     */
    public function send(FacadeRequestInterface $message, $options = []): ResponseInterface
    {
        return $this->doRequest($message, $options);
    }


    /**
     * @throws FacadeRequestException
     */
    protected function doRequest(FacadeRequestInterface $message, array $options): ResponseInterface
    {
        try {
            return $this->client->request(
                $message->getMethod(),
                $message->getUri(),
                $options
            );
        } catch (GuzzleException $e) {
            throw new FacadeRequestException(message:  $e->getMessage(), code: $e->getCode());
        }
    }
}
