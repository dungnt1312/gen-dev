<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    */

    'path' => [

        'migration'         => database_path('migrations/'),

        'model'             => app_path('Models/'),

        'datatables'        => app_path('DataTables/'),

        'repository'        => app_path('Repositories/'),

        'routes'            => base_path('routes/backend.php'),

        'api_routes'        => base_path('routes/api.php'),

        'request'           => app_path('Http/Requests/Backend/'),

        'api_request'       => app_path('Http/Requests/API/'),

        'controller'        => app_path('Http/Controllers/Backend/'),

        'api_controller'    => app_path('Http/Controllers/API/'),

        'api_resource'      => app_path('Http/Resources/'),

        'repository_test'   => base_path('tests/Repositories/'),

        'api_test'          => base_path('tests/APIs/'),

        'tests'             => base_path('tests/'),

        'views'             => resource_path('views/backend/'),

        'schema_files'      => resource_path('model_schemas/'),

        'templates_dir'     => resource_path('infyom/infyom-generator-templates/'),

        'seeder'            => database_path('seeders/'),

        'database_seeder'   => database_path('seeders/DatabaseSeeder.php'),

        'factory'           => database_path('factories/'),

        'view_provider'     => app_path('Providers/ViewServiceProvider.php'),

        'package'           => base_path('packages/dungnt1312/'),

    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => [

        'model'             => 'App\Models',

        'datatables'        => 'App\DataTables',

        'repository'        => 'App\Repositories',

        'controller'        => 'App\Http\Controllers\Backend',

        'api_controller'    => 'App\Http\Controllers\API',

        'api_resource'      => 'App\Http\Resources',

        'request'           => 'App\Http\Requests\Backend',

        'api_request'       => 'App\Http\Requests\API',

        'seeder'            => 'Database\Seeders',

        'factory'           => 'Database\Factories',

        'repository_test'   => 'Tests\Repositories',

        'api_test'          => 'Tests\APIs',

        'tests'             => 'Tests',
    ],

    /*
   |--------------------------------------------------------------------------
   | Prefixes
   |--------------------------------------------------------------------------
   |
   */

    'prefixes' => [

        'route' => 'backend',  // using admin will create route('admin.?.index') type routes

        'path' => '',

        'public' => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    'templates'         => 'adminlte-templates',

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    'model_extend_class' => 'Eloquent',

    /*
    |--------------------------------------------------------------------------
    | API routes prefix & version
    |--------------------------------------------------------------------------
    |
    */

    'api_prefix'  => 'api',

    'api_version' => 'v1',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    */

    'options' => [

        'softDelete' => true,

        'save_schema_file' => true,

        'localized' => false,

        'tables_searchable_default' => false,

        'repository_pattern' => true,

        'resources' => false,

        'excluded_fields' => ['id'], // Array of columns that doesn't required while creating module
    ],



    /*
    |--------------------------------------------------------------------------
    | Add-Ons
    |--------------------------------------------------------------------------
    |
    */

    'add_on' => [

        'swagger'       => false,

        'tests'         => true,

        'datatables'    => false,

        'menu'          => [

            'enabled'       => true,

            'menu_file'     => 'layouts/menu.blade.php',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Timestamp Fields
    |--------------------------------------------------------------------------
    |
    */

    'timestamps' => [

        'enabled'       => true,

        'created_at'    => 'created_at',

        'updated_at'    => 'updated_at',

        'deleted_at'    => 'deleted_at',
    ],

    /*
    |--------------------------------------------------------------------------
    | Save model files to `App/Models` when use `--prefix`. see #208
    |--------------------------------------------------------------------------
    |
    */
    'ignore_model_prefix' => false,

    /*
    |--------------------------------------------------------------------------
    | Specify custom doctrine mappings as per your need
    |--------------------------------------------------------------------------
    |
    */
    'from_table' => [

        'doctrine_mappings' => [],
    ],

];
