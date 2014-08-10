<?php

/**
 * A simple PHP MVC skeleton
 *
 * @package php-mvc
 * @author Panique
 * @link http://www.php-mvc.net
 * @link https://github.com/panique/php-mvc/
 * @license http://opensource.org/licenses/MIT MIT License
 */
// load the (optional) Composer auto-loader
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}

use Parse\ParseClient;


// load application config (error reporting etc.)
require 'application/config/config.php';

// load application class
require 'application/libs/application.php';
require 'application/libs/controller.php';

// start the application
ParseClient::initialize('LoJ9fOs7EERrga4GKZdF1PvDDcjier4bRHuJmFBt', 'b4uUFElIo7qJehqCMq8Ot2vKBTlpH6bRrtzkb2Lz', 'UC345ixaORMQLQ3R5p9auPJCzXzqz9RdpIYgdHAg');


$app = new Application();
