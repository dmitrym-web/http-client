<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

interface FacadeRequestInterface
{
    public function create(string $path, array $data, string $className): FacadeRequestInterface;
}
