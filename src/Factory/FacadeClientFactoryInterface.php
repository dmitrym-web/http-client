<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

use FacadeClient\Client\Client;

interface FacadeClientFactoryInterface
{
    public function create(SettingClient $setting): Client;
}
