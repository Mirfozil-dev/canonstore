<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=canonstore_db',
    'username' => 'postgres',
    'password' => 'postgres',
    'charset' => 'utf8',

    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'public' //specify your schema here, public is the default schema
        ]
    ], // P
];
