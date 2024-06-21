<?php

declare(strict_types=1);

namespace FacadeClient\Response;


interface FacadeResponseInterface
{
    public function getStatusCode(): int;

    public function getBody(): array;
}
