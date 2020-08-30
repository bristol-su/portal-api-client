<?php

namespace BristolSU\ApiClientImplementation\Portal;

use BristolSU\ApiClientImplementation\Portal\Clients\MeClient;

class Client extends \BristolSU\ApiToolkit\Contracts\ClientResourceGroup
{

    public static function getMethodName(): string
    {
        return 'portal';
    }

    public static function getResources(): array
    {
        return [
          'me' => MeClient::class
        ];
    }
}
