<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.18
 * Time: 13:55
 */

namespace app\controllers;

use app\models\Category;
use yii\web\Controller;
use app\models\TestForm;
use Yii;

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
        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('test',compact('model'));
    }

    public function actionShow()
    {
        $this->layout = 'basic';
         // $cats = Category::find()->all();
         // $cats = Category::find()->orderBy(['id'=> SORT_DESC])->all();
        // $cats = Category::find()->asArray()->all();
        // $cats = Category::find()->where('parent=691')->all();
        // $cats = Category::find()->asArray()->where('parent=691')->all();
         // $cats = Category::find()->asArray()->where(['parent'=> 691])->all();
        // $cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all();
        // $cats = Category::find()->asArray()->where(['<=', 'id', '695'])->orderBy(['id'=> SORT_DESC])->all();
        // $cats = Category::find()->asArray()->where('parent=691')->limit(2)->all();
         // $cats = Category::find()->asArray()->where('parent=691')->one(); избыточный
         // $cats = Category::find()->asArray()->where('parent=691')->count(); вернет строку
        // $cats = Category::find()->asArray()->where('parent=691')->count();
        // $cats = Category::findOne(['parent'=> 691]);
        // $cats = Category::findAll(['parent'=> 691]);
        // $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
        // $cats = Category::findBySql($query)->all();
         // $query = "SELECT * FROM categories WHERE title LIKE :search";
         // $cats = Category::findBySql($query,[':search' => '%pp%'])->all();
        // $cats = Category::findOne(['id'=> 694]); //для отложенной загрузки
       // $cats = Category::find()->with('products')->all(); // Category метод getProducts
        //$cats = Category::find()->where(['id'=> 694])->all();
        $cats = Category::find()->with('products')->all();
        $mu = ['cow'];
        return $this->render('show', compact('cats'));
    }
}