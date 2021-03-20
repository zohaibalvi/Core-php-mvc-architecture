<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/Core_PHP_MVC/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);

/**
 * dotenv load
 */
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * Routing
 */
require_once __DIR__.'/routes/web.php';

