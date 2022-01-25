<?php
declare (strict_types = 1);

namespace think\worker\command;

use think\console\Input;
use think\console\Output;
use think\worker\command\Worker;

class Api extends Worker
{
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
        
        parent::execute($input,$output);
       
    }
}
