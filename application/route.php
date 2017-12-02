<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    //前台页面路由
    //'details/:id' => ['article/details',['id'=>'\d+']]

    'details/:id' => ['article/details',['id'=>'\d+']]
    //路由规则 URL 就是独立于域名之后的部分
    //http://www.zxd.com/manage/details/id/1  URL :manage/details/id/1
    //'URL' => '模块/控制器/方法'
    //'details/id/[:id]' => ['index/article/details/id/',['id'=>'\d+']],

];
