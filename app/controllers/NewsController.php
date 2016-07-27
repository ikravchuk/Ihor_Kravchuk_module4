<?php


namespace Module4\controllers;


use \Module4\models\News;

class NewsController
{
    public function actionList()
    {
        $newsList = [];
        $newsList = News::getNewsList();
        print_r($newsList);
    }

    public function actionView($category, $id)
    {
        echo 'NewsController actionView works<br>';
        echo $category."+".$id;

    }


}