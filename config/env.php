<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | Trace设置 开启 app_trace 后 有效
// +----------------------------------------------------------------------


$host = $_SERVER['HTTP_HOST'];
if ($host == 'guangfeng3mapi.prozyg.com') {
    return include_once __DIR__ . '/env/dev.config.php';

} elseif ($host == 'orderapi.guangfeng3m.com') {
    return include_once __DIR__ . '/env/pro.config.php';

} else {
    return include_once __DIR__ . '/env/local.config.php';

}
