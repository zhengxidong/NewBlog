<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article as ArticleModel;
use app\index\model\Column as ColumnModel;
class Article extends Controller{
    public function details($id)
    {
        $columnInfo = ColumnModel::select();
        $this->view->assign("columnInfo",$columnInfo);

        //var_dump($id);
        $article = new ArticleModel;
        $result = $article->get($id)->toArray();
        //$result = ArticleModel::find($id)->toArray();

        /*dump($result->toArray());
        exit;*/
        $this->view->assign("articleInfo",$result);
        return $this->view->fetch();
    }
}