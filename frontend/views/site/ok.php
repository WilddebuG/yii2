<?php
/**
 * Created by PhpStorm.
 * User: wilddebug
 * Date: 05.06.18
 * Time: 11:50
 */


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


if (Yii::$app->session->hasFlash('success')) {
    echo Yii::$app->session->getFlash('success');
}

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="new">
    <h1>First view for controller</h1>
</div>
<?php
$form = ActiveForm::begin(['id' => 'form-register']);
echo $form->field($model,'email');
echo $form->field($model,'first_name');
echo $form->field($model,'last_name');
echo Html::submitButton('Submit',['class'=> 'btn btn-success register']);
ActiveForm::end();

?>
