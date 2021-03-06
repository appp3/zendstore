<?php
return array(
    'modules' => array(
        'ZendStore',
    	'Doctrine',
    	'DoctrineModule',
    	'DoctrineORMModule',
   		'Application',
    	'Demo',
    	'Album',
    	'Catalog',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
