<?php
/**
 * Created by PhpStorm.
 * User: wilddebug
 * Date: 05.06.18
 * Time: 14:05
 */

namespace frontend\controllers;

use yii\web\Controller;
use common\models\Customers;
use Yii;

class CustomersController extends Controller
{

    public function actionIndex()
    {
        $model = new Customers;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->session->setFlash('success', 'Yep, all is dcool');
        }
        return $this->render('index', ['model' => $model]);
    }

    public function actionSave()
    {
        $model = new Customers();
        $postData = Yii::$app->request->post('Customers');

        $model->first_name = $postData['first_name'];
        $model->last_name = $postData['last_name'];
        $model->email = $postData['email'];
        if (!$model->save())
            print_r($model->getErrors());
        else
            Yii::$app->getSession()->setFlash('success', 'Your message has been successfully recorded.');
        return $this->render('index', [
            'model' => $model
        ]);
    }

}