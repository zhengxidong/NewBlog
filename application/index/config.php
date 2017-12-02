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
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------

    
    // 视图输出字符串内容替换
    'view_replace_str'  =>  [
        //当index.php入口在根目录的时候加public，
        //当index.php是跟static同级，模板可直接使用__STATIC__
        //如果index.php是跟static同级，则不需要加public,

        //'__PUBLIC__'=>dirname($_SERVER['HTTP_HOST']).'/public/static/index',
          //'__PUBLIC__'=>'public/static/index',
        '__PUBLIC__'=>SITE_URL.'public/static/index',
          '__ROOT__' => '/',
      ],
    //'datetime_format' => 'Y-m-d H:i:s',

];
