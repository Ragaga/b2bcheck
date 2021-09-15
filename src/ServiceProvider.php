<?php

declare(strict_types=1);

namespace B2B\Contrib;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    public function register()
    {
        dump('I`m here');
        die();
    }
}

