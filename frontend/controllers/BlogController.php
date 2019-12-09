<?php
  namespace frontend\controllers;

  use yii\web\Controller;
  use Yii;
  use backend\models\Blog;

  class BlogController extends Controller
  {
    public function actionIndex()
    {
      //echo "Hello";
      $blogs = Blog::find()->all();

      return $this->render('index', ['blogs'=>$blogs]);
    }

    public function actionView($id)
    {
      $blogs = Blog::find()->where(['slug'=>$id])->one();

      return $this->render('view', ['blogs'=>$blogs]);
    }
  }

 ?>
