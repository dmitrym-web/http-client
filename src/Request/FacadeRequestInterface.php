<?php

declare(strict_types=1);

namespace FacadeClient\Request;

interface FacadeRequestInterface
{
    public function getMethod(): string;

    public function getUri(): string;

    public function getData();
}
