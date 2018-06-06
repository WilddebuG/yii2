<?php
/**
 * Created by PhpStorm.
 * User: wilddebug
 * Date: 05.06.18
 * Time: 11:50
 */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Customers */
/* @var $form ActiveForm */
?>
<div class="posts-index">

    <?php $form = ActiveForm::begin([
        'action' => 'save',
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal']]); ?>


    <div class="form-group">
        <?= $form->field($model, 'first_name')->textInput()->hint('Пожалуйста, введите имя')->label('Имя');; ?>
        <?= $form->field($model, 'last_name'); ?>
        <?= $form->field($model, 'email'); ?>
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- posts-index -->