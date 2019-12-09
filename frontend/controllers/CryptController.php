<?php
  namespace frontend\controllers;

  use yii\web\Controller;
  use Yii;

  class CryptController extends Controller
  {
    public function actionIndex()
    {
      echo '<h1>Cryptography</h1>';

      echo Yii::$app->getSecurity()->generateRandomString();
      echo '<br><br>';
      echo Yii::$app->getSecurity()->generatePasswordHash('password');
      echo '<br><br>';
      echo '<h1>Enc & Dec</h1>';
      echo $encrypt = Yii::$app->getSecurity()->encryptByPassword('My name is nweni','n123');
      echo '<br><br>';
      echo $decrypt = Yii::$app->getSecurity()->decryptByPassword($encrypt,'n123');
      echo '<br><br>';
      echo '<h1>Data Integrity</h1>';
      echo $data = Yii::$app->getSecurity()->hashData('My name is nweni  ', 'qwerty');
      echo '<br><br>';
      echo Yii::$app->getSecurity()->validateData($data, 'qwerty');

    }
  }

 ?>
