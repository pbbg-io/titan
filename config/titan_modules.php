<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Location
    |--------------------------------------------------------------------------
    |
    | This option controls the default module location that gets used while
    | using this package. This location is used when another is not explicitly
    | specified when exucuting a given module function or command.
    |
    */

    'default_location' => 'app',

    /*
    |--------------------------------------------------------------------------
    | Locations
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the module locations for your application as
    | well as their drivers and other configuration options. This gives you
    | the flexibility to structure modules as you see fit in each location.
    |
    */

    'locations' => [
        'app' => [
            'driver'    => 'local',
            'path'      => base_path('modules'),
            'namespace' => 'Modules\\',
            'enabled'   => true,
            'provider'  => 'ModuleServiceProvider',
            'manifest'  => 'titan.json',
            'mapping'   => [

                // Here you may configure the class mapping, effectively
                // customizing your generated default module structure.

                'Config'              => 'src/Config',
                'Database/Factories'  => 'src/Database/Factories',
                'Database/Migrations' => 'src/Database/Migrations',
                'Database/Seeds'      => 'src/Database/Seeds',
                'Http/Controllers'    => 'src/Http/Controllers',
                'Http/Middleware'     => 'src/Http/Middleware',
                'Providers'           => 'src/Providers',
                'Resources/Lang'      => 'src/Resources/Lang',
                'Resources/Views'     => 'src/Resources/Views',
                'Routes'              => 'src/Routes'
            ],
        ],
        'vendor' => [
            'driver'    => 'vendor',
            'path'      => base_path('vendor'),
            'namespace' => 'Modules\\',
            'enabled'   => true,
            'provider'  => 'ModuleServiceProvider',
            'manifest'  => 'titan.json',
            'mapping'   => [

                // Here you may configure the class mapping, effectively
                // customizing your generated default module structure.

                'Config'              => 'src/Config',
                'Database/Factories'  => 'src/Database/Factories',
                'Database/Migrations' => 'src/Database/Migrations',
                'Database/Seeds'      => 'src/Database/Seeds',
                'Http/Controllers'    => 'src/Http/Controllers',
                'Http/Middleware'     => 'src/Http/Middleware',
                'Providers'           => 'src/Providers',
                'Resources/Lang'      => 'src/Resources/Lang',
                'Resources/Views'     => 'src/Resources/Views',
                'Routes'              => 'src/Routes'
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Driver
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default module storage driver that should be
    | used by the package. A "local" driver is available out of the box that
    | uses the local filesystem to store and maintain module manifests.
    |
    */

    'default_driver' => 'local',

    /*
     |--------------------------------------------------------------------------
     | Drivers
     |--------------------------------------------------------------------------
     |
     | Here you may configure as many module drivers as you wish. Use the
     | local driver class as a basis for creating your own. The possibilities
     | are endless!
     |
     */

    'drivers' => [
        'local' => 'PbbgIo\Titan\Repositories\LocalRepository',
        'vendor' => 'PbbgIo\Titan\Repositories\VendorRepository',
    ],
];
