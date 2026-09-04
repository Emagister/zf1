<?php

return [
    'target_php_version' => '8.5',

    'directory_list' => [
        'library',
    ],

    'exclude_analysis_directory_list' => [
        'vendor/',
    ],

    'exclude_file_regex' => '@^library/.*/.*/Adapter/.*Test.*@',

    'minimum_target_php_version' => '8.1',
];
