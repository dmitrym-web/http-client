<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

class FacadeRequestFactoryI implements FacadeRequestFactoryIInterface
{
    public function create(string $path, array $data, string $className): FacadeRequestFactoryIInterface
    {
        return new $className($path, $data);
    }
}
