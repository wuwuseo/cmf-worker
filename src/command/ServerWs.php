<?php

namespace cmf\worker\command;

use cmf\worker\traits\Database;
use think\console\Input;
use think\console\Output;
use think\facade\Config;
use think\worker\command\Server;

/**
 * Worker Server  命令行类
 */
class ServerWs extends Server
{
    use Database;

    protected $config = [];

    public function configure()
    {
        parent::configure();
        $this->setName('worker:server-ws')
            ->setDescription('Workerman Server for ThinkCmf-server-websocket');
    }

    public function execute(Input $input, Output $output)
    {
        $this->initDbConfig();
        Config::load('worker_server_ws','worker_server');
        parent::execute($input,$output);
       
    }
}