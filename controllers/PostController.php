<?php
/**
 * Created by PhpStorm.
 * User: Iren
 * Date: 21.02.2017
 * Time: 16:35
 */

namespace app\controllers;
use Yii;
class PostController extends AppController
{
    public function actionTest()
    {
        $name = ['Ivanov', 'Petrov', 'Sidorov'];
        print_r($name);
       /* $this->debug(Yii::$app);*/
      return  $this->render('test');
    }
}