<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

readonly class SettingClient
{
    public function __construct(private string $baseUri)
    {
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function getSetting(): array
    {
        return [
          'base_uri' => $this->getBaseUri(),
        ];
    }
}
