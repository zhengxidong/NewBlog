<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/9/24
 * Time: 15:08
 */
namespace app\index\model;
use think\Model;
class Article extends model
{
    protected $autoWriteTimestamp = false;
    //'Y-m-d H:i:s'
    //禁止转换格式为Y-m-d H:i:s
    protected $dateFormat = false;
}