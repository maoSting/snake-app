<?php
/**
 * Created by PhpStorm.
 * Author: DQ
 * Date: 2019/8/14
 * Time: 14:45
 */

define('APP_PATH', __DIR__);
var_dump(APP_PATH);

require APP_PATH.'/vendor/autoload.php';

require APP_PATH.'/config/config.php';
//require APP_PATH
var_dump($argv);
var_dump($argc);


\Snake\Snake::run();