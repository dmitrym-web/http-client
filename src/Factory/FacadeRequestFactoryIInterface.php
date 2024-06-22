<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

interface FacadeRequestFactoryIInterface
{
    public function create(string $path, array $data, string $className): FacadeRequestFactoryIInterface;
}
