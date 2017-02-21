<?php
/**
 * Created by PhpStorm.
 * User: Iren
 * Date: 21.02.2017
 * Time: 16:18
 */

namespace app\controllers;


use yii\base\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}