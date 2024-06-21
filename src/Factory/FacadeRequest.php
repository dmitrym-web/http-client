<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

class FacadeRequest implements FacadeRequestInterface
{
    public function create(string $path, array $data, string $className): FacadeRequestInterface
    {
        return new $className($path, $data);
    }
}
