<?php
declare (strict_types = 1);

namespace cmf\worker\command;

use think\worker\command\Worker;

class Web extends  Worker
{
    public function configure()
    {
        parent::configure();
        // 指令配置
        $this->setName('worker:web')
            ->setDescription('Workerman HTTP Server for ThinkCMF Web');
    }
}
