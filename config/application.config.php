<?php
return array(
    'modules' => array(
        'Application',
    	'Base',
    	'Demo',
        'Album',
    	'Media',
    	'Geography',
    	'Payment',
    	'User',
    	'Catalog',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'config_cache_enabled' => false,
        'cache_dir'            => 'data/cache',
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
    'service_manager' => array(
        'use_defaults' => true,
        'factories'    => array(
        ),
    ),
);
