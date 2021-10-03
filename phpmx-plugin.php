<?php
/**
 * Plugin Name:        PHP Mexico
 * Plugin URI:         https://github.com/phpmx/phpmx-plugin
 * Description:        Funcionalidad del sitio de PHP Mexico
 * Version:            1.0.0
 * Requires at least:  5.8
 * Requires PHP:       7.4
 * Author:             PHP Mexico
 * Author URI:         https://github.com/phpmx
 * License:            MIT
 */


if (file_exists(__DIR__ . '/vendor/autoload.php') ) {
    include_once __DIR__ . '/vendor/autoload.php';
}

use phpmx\Bootstrap;

Bootstrap::init();
