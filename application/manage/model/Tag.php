<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/9/24
 * Time: 15:48
 */
namespace app\manage\model;
use think\Model;
class Tag extends model
{
    public function articles()
    {
        return $this->belongsToMany('Article','article_for_tag');
    }
}