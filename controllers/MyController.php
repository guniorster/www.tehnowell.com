<?php
/**
 * Created by PhpStorm.
 * User: Iren
 * Date: 21.02.2017
 * Time: 12:50
 */

namespace app\controllers;


/*use yii\web\Controller;*/

class MyController extends AppController {

    public function actionIndex ()
    {

        $hi = 'Hello ghbdtklajdsf f kjasdklfj ';
        return $this->render('index', ['hello' => $hi, 'names' => $name]);
    }
}