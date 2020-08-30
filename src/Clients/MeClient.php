<?php

namespace BristolSU\ApiClientImplementation\Portal\Clients;

use BristolSU\ApiClientImplementation\Portal\Models\ControlUser;
use BristolSU\ApiClientImplementation\Portal\Models\DataUser;
use BristolSU\ApiClientImplementation\Portal\Models\User;
use BristolSU\ApiToolkit\Contracts\ClientResource;
use BristolSU\ApiToolkit\Hydration\Hydrate;

class MeClient extends ClientResource
{
    public function get()
    {
        $this->hydrate(
          Hydrate::new()->model(User::class)
            ->child(
              'control',
              Hydrate::new()->model(ControlUser::class)
                ->child(
                  'data',
                  Hydrate::new()->model(DataUser::class)
                )
            )
        );
        return $this->httpGet('/api/whoami');
    }
}
