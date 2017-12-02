<?php
namespace app\manage\controller;
use think\Controller;
use app\manage\model\Article as ArticleModel;
use app\manage\model\Column as ColumnModel;
use app\manage\model\Tag as TagModel;
use think\Request;
class Article extends Controller
{
    public function index()
    {
        $articleList = ArticleModel::select();
        $this->view->assign("articleList",$articleList);
        return $this->view->fetch();
    }
    public function add(Request $request)
    {

        if(empty($request->isPost()))
        {
            //取出所有栏目
            $columnList = ColumnModel::select();
            $this->view->assign("columnList",$columnList);

            //取出所有标签
            $tagList = TagModel::select();
            $this->view->assign("tagList",$tagList);

        }
        else
        {

            if($request->isPost())
            {
                $dataArr = $request->param();
                if(!empty($dataArr) && isset($dataArr))
                {

                    $data = $request->except('column_id,tag_id');
                    $column_id = $request->param('column_id');

                    //获取的数据为数组，请一定注意要加上 /a 修饰符才能正确获取到
                    $tag_id = $request->param('tag_id/a');
                    if($data['is_public'] == 'on')
                    {
                        $data['is_public'] = 1;
                    }
                    //pic为封面图片地址
                    $data['pic'] = 1;

                    $result = ArticleModel::create($data);
                    $result->columns()->attach($column_id);

                    //给article_for_tag中间表添加多个字段数据
                    foreach ($tag_id as $tagId)
                    {
                        $result->tags()->attach($tagId,['create_time'=>date('Y-m-d H:i:s')]);
                    }

                    if($result)
                    {
                        $this->success('添加成功','article/index');
                    }
                    else
                    {
                        $this->error('添加失败','article/add');
                    }
                }
            }
            else
            {
                $this->error('非法操作！','article/add');
            }
        }
        return $this->view->fetch();
    }
    public function edit($id)
    {
        $request = Request::instance();
        if(empty($request->isPost()))
        {
            /*$columnList = ColumnModel::select();

            $this->view->assign("columnList",$columnList);

            $tagList = TagModel::select();
            $this->view->assign("tagList",$tagList);*/

            $article = ArticleModel::get($id);
            dump($article);
            exit;
            $this->view->assign("article",$article);
        }
        else
        {
            $data = $request->except('column_id,tag_id');
            $column_id = $request->param('column_id');
            $tag_id = $request->param('tag_id');

        }
        return $this->view->fetch();
    }
}