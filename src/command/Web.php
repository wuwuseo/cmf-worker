<?php
declare (strict_types = 1);

namespace cmf\worker\command;

use cmf\worker\traits\Database;
use think\console\Input;
use think\console\Output;
use think\facade\Config;
use think\worker\command\Worker;

class Web extends  Worker
{
    use Database;

    public function configure()
    {
        parent::configure();
        // 指令配置
        $this->setName('worker:web')
            ->setDescription('Workerman HTTP Server for ThinkCMF Web');
    }

    public function execute(Input $input, Output $output)
    {
        $this->initDbConfig();
        Config::load('worker_web','worker');
        parent::execute($input,$output);
       
    }
}
