<?php

namespace cmf\worker\command;

use think\console\Input;
use think\console\Output;
use think\facade\Config;
use think\worker\command\Server;

/**
 * Worker Server  命令行类
 */
class ServerWs extends Server
{
    protected $config = [];

    public function configure()
    {
        $this->setName('worker:server-ws')
            ->setDescription('Workerman Server for ThinkCmf-server-websocket');
    }

    public function execute(Input $input, Output $output)
    {
        Config::load('worker_server_ws','server');
        parent::execute($input,$output);
       
    }
}