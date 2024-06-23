<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

use GuzzleHttp\Client;

interface FacadeGuzzleClientFactoryInterface
{
    public function create(SettingClient $setting): Client;
}
