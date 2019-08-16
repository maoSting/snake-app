<?php
/**
 * Created by PhpStorm.
 * Author: DQ
 * Date: 2019/8/14
 * Time: 14:45
 */
error_reporting(E_ALL);

define("APP_PATH", __DIR__);
var_dump($argv);
var_dump($argc);
var_dump(APP_PATH);


require APP_PATH.'/vendor/autoload.php';
require APP_PATH.'/vendor/dingq/snake/src/init.php';

require APP_PATH.'/config/config.php';

//require APP_PATH



\Snake\Snake::setConfig(import());
\Snake\Snake::run();