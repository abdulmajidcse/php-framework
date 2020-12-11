<?php

/**
 * Application Environment
 * Development or Production
 * Comment In for Development
 * Comment Out for Production
 */
// error_reporting(0);

require_once __DIR__ . '/../vendor/autoload.php';

App\System\Bootstrap::runApp();