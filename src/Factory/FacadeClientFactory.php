<?php

declare(strict_types=1);

namespace FacadeClient\Factory;

use FacadeClient\Client\Client;

class FacadeClientFactory implements FacadeClientFactoryInterface
{

    public function create(SettingClient $setting): Client
    {
        return (new Client($setting));
    }
}
