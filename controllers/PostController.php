<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.18
 * Time: 13:55
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\TestForm;

class PostController extends Controller
{

//    public $layout = 'basic';
    /**
     * @return Action
     */
    public function actionTest()
    {
        $this->layout = 'basic';

        $model = new TestForm();

        return $this->render('test',compact('model'));
    }

    public function actionShow()
    {
        $this->layout = 'basic';
        return $this->render('show');
    }
}