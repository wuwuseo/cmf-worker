<?php
namespace cmf\worker\traits;

use think\facade\Config;

trait Database {
    // 初始化一些数据库配置
    protected function initDbConfig()
    {
        $config = Config::get('database');
        $config['connections']['mysql']['break_reconnect'] = true;
        Config::set($config,'database');
    }
}