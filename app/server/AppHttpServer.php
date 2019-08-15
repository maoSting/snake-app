<?php
/**
 * Created by PhpStorm.
 * Author: DQ
 * Date: 2019/8/14
 * Time: 16:56
 */
namespace app\server;

class AppHttpServer extends \Snake\Swoole\Server\HttpServer {

    public function __construct(\Swoole\Server $server, array $conf) {
        parent::__construct($server, $conf);
    }


    public function onRequest(\Swoole\Http\Request $request, \Swoole\Http\Response $response){
        $this->httpRouter($request, $response);
    }

}