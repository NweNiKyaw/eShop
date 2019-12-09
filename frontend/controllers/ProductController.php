<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use backend\models\Products;

class ProductController extends Controller
{
    public function actionIndex($id)
    {
      //$product = Products::findOne($id);
      $product = Products::find()->where(['id'=>$id, 'status'=>1])->one();
      return $this->render('index',['product'=>$product]);
    }
}
