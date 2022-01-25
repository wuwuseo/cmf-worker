<?php
namespace cmf\worker;

use think\Service as BaseService;

class Service extends BaseService
{
    public function register()
    {
        $this->commands([
            'worker:web'  => '\\cmf\\worker\\command\\Web',
            'worker:api' => '\\cmf\\worker\\command\\Api',
        ]);
    }
}
