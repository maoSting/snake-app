<?php
/**
 * Created by PhpStorm.
 * Author: DQ
 * Date: 2019/8/16
 * Time: 9:57
 */

namespace app\server;

use Snake\Swoole\Listener\Http;

class AppHttpPort extends Http {
    public function onRequest(\Swoole\Http\Request $request, \Swoole\Http\Response $response) {
        $this->httpRouter($request, $response);
    }

    public function onClose(\Swoole\Server $server, $fd, $reactor_id) {
        parent::onClose($server, $fd, $reactor_id);
    }
}