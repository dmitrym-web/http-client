<?php

declare(strict_types=1);

namespace FacadeClient\Client;

use FacadeClient\Factory\SettingClient;

class Client extends AbstractClient
{
    public function __construct(SettingClient $setting)
    {
        parent::__construct($setting);
    }
}
