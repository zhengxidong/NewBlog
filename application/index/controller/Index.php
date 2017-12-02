<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article;
use app\index\model\Column as ColumnModel;
class Index extends Controller
{
    public function index()
    {
        $columnInfo = ColumnModel::select();
        $this->view->assign("columnInfo",$columnInfo);
        //dump($columnInfo);
        $article = Article::select();
        $this->view->assign("articleList",$article);
        return $this->view->fetch();
    }
}
