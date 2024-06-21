<?php

declare(strict_types=1);

namespace FacadeClient\Response;

readonly class FacadeResponse implements FacadeResponseInterface
{

    public function __construct(private int $statusCode, private string $body)
    {
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getBody(): array
    {
        return json_decode($this->body, true);
    }
}
