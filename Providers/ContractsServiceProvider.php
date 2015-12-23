<?php

namespace Avantinternet\Modules\Providers;

use Illuminate\Support\ServiceProvider;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(
            'Avantinternet\Modules\Contracts\RepositoryInterface',
            'Avantinternet\Modules\Repository'
        );
    }
}
