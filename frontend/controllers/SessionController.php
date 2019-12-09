<?php

  namespace frontend\controllers;

  use Yii;
  use yii\web\Controller;

  class SessionController extends Controller
  {
    public function actionIndex()
    {
      $session = Yii::$app->session;
      $session -> set('name1', 'Yii Africa PHP Framework');
      $session['name2'] = 'Yii Africa PHP Framework methods 2';
      $_SESSION['name3'] = 'Yii Africa PHP Framework methods 3';
    }

    public function actionTest()
    {
      $session = Yii::$app->session;

      if($session->isActive){
        echo 'Session is active <br>';
      }
      else{
        echo 'Session is not active <br>';
      }
      //$session->remove('name2');
      echo $session->get('name1').'<br>';
      echo $session['name2'].'<br>';
      echo $_SESSION['name3'].'<br>';
      echo $session['arr']['id'].'<br>';
      echo $session['arr']['name'].'<br>';
      echo $session['arr']['Phone'].'<br>';
    }

    public function actionTest1()
    {
      $session = Yii::$app->session;
      $session->open();
      $session['arr'] = [
        'id'=>1,
        'name'=>'Yii',
        'Phone'=>'123456'
      ];

    }
  }

 ?>
