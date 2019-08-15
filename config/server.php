<?php
/**
 * Created by PhpStorm.
 * Author: DQ
 * Date: 2019/8/14
 * Time: 16:43
 */


return [
    'server' => [
        'server_type' => \Snake\Swoole\Server::SWOOLE_SERVER,
        'port' => 9051,
        'action' => \app\server\AppHttpServer::class,
    ]
];