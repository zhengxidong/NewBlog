<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/9/24
 * Time: 15:08
 */
namespace app\manage\model;
use think\Model;
class Article extends model
{
    protected $autoWriteTimestamp = 'datetime';

    protected $updateTime = false;

    public function columns()
    {
        return $this->belongsToMany('Column','article_for_column');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag','article_for_tag');
    }
}