<?php
namespace app\controllers\admin;
use app\controllers\AppController;
/*use yii\web\Controller;*/
/**
 * Created by PhpStorm.
 * User: Iren
 * Date: 21.02.2017
 * Time: 16:02
 */
class UserController extends AppController {

    public function actionIndex()
    {
        return $this->render('index');
    }
}