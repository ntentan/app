<?php

use ntentan\Application;
use ntentan\ContainerBuilder;

/**
 * Setup our custom namespace and initialize the autoloader to it
 */
$namespace = 'app';
$loader = require "vendor/autoload.php";
$loader->addPsr4("$namespace\\", __DIR__ . '/src');

/**
 * Get an instance of the DI container
 */
$container = (new ContainerBuilder())->getContainer();

/**
 * Execute the application
 */
$container->resolve(Application::class, ['namespace' => $namespace])->execute();
