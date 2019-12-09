<?php
  namespace frontend\controllers;

  use yii\web\Controller;
  use Yii;

  class PasswordController extends Controller
  {
    public function actionIndex()
    {
      echo $password = Yii::$app->getSecurity()->generatePasswordHash('qwerty');

    }

    public function actionPassword()
    {
      $hash = '$2y$13$GreF9hxlV11m604RZrE80OIphs6VQSW5MUtSAUpue0xmq0KAikhNO';
      if(Yii::$app->getSecurity()->validatePassword('qwerty', $hash)){
        echo 'Password is correct';
      }
      else{
        echo 'Password is incorrect';
      }

    }

  }

 ?>
