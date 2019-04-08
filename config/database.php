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
//本地开发
//本地测试服
$host=$_SERVER['HTTP_HOST']; 
if($host=='guangfeng3mapi.prozyg.com'){
    
    return include_once __DIR__.'/database/dev.database.php';
    	
}elseif($host=='orderapi.guangfeng3m.com'){

    return  include_once __DIR__.'/database/pro.database.php';
    
}
else{
   return include_once __DIR__.'/database/local.database.php';

}

