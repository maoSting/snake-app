<?php
/**
 * Created by PhpStorm.
 * Author: DQ
 * Date: 2019/8/14
 * Time: 16:43
 */


return [
    'server' => [
        'server_type' => \Snake\Snake::SWOOLE_HTTP_SERVER,
        'port' => 9051,
        'event' => \app\server\AppHttpServer::class,
        'mode' => SWOOLE_PROCESS,
        'socket_type' => SWOOLE_SOCK_TCP,
        'ip'=> '127.0.0.1',
        'set' => [
            'worker_num' => 4,
            'daemonize' => 1
        ]
    ],
//    'add_listener' => [
//        'port' => 9052,
//        'action' => \app\server\AppHttpPort::class,
//        'type' => SWOOLE_SOCK_TCP,
//        'ip' => '127.0.0.1',
//        'set'
//    ]
];