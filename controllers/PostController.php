<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.18
 * Time: 13:55
 */

namespace app\controllers;


use yii\web\Controller;

class PostController extends Controller
{

//    public $layout = 'basic';
    /**
     * @return Action
     */
    public function actionTest()
    {
        $this->layout = 'basic';
        return $this->render('test');
    }

    public function actionShow()
    {
        $this->layout = 'basic';
        return $this->render('show');
    }
}