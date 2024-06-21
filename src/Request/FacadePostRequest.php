<?php

declare(strict_types=1);

namespace FacadeClient\Request;

use FacadeClient\Constant\FacadeConstant;

readonly class FacadePostRequest implements FacadeRequestInterface
{
    public function __construct(private string $path, private array $data = [])
    {
    }

    public function getMethod(): string
    {
        return FacadeConstant::METHOD_POST;
    }

    public function getUri(): string
    {
        return $this->path;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
