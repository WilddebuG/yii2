<?php
/**
 * Created by PhpStorm.
 * User: wilddebug
 * Date: 05.06.18
 * Time: 14:05
 */

namespace frontend\controllers;

use yii\web\Controller;
use common\models\Posts;

class PostsController extends Controller
{

    public function actionIndex()
    {
        $customers = Posts::find()->all();
        return $this->render('index', ['posts' => $customers]);
    }

}