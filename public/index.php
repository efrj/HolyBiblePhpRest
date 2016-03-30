<?php
require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
    'driver'   => 'sqlite',
    'database' => __DIR__.'/../db/KJV-PCE.db',
    'prefix'   => '',
], 'default');
$capsule->bootEloquent();
$capsule->setAsGlobal();

session_start();

$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/../src/dependencies.php';
require __DIR__ . '/../src/routes.php';

$app->run();