<?php

namespace Utils;

use Utils\Redis\Redis;
use think\Config;

/**
 * 工具库
 * Class Utils
 * @package app\common\library\Utils
 */
class Utils
{
    /**
     * Redis 实例
     * @return mixed
     */
    public static function redis()
    {
//        // config
//        'redis' => [
//        'host' => '127.0.0.1',
//        'port' => 6379,
//        'auth' => '',
//        ],
        return Redis::getInstance(Config::get('redis'));
    }
}