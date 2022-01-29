<?php
declare (strict_types = 1);

namespace cmf\worker\command;

use cmf\worker\traits\Database;
use think\console\Input;
use think\console\Output;
use think\facade\Config;
use think\worker\command\Worker;

class Api extends Worker
{
    use Database;

    protected $config = [
    ];

    public function configure()
    {
        parent::configure();
        // 指令配置
        $this->setName('worker:api')
            ->setDescription('Workerman HTTP Server for ThinkCMF Api');
    }

    public function execute(Input $input, Output $output)
    {
        define('APP_NAMESPACE', 'api');
        $this->initDbConfig();
        Config::load('worker_api','worker');
        parent::execute($input,$output);
       
    }
}
