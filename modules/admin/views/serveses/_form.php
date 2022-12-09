<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Serveses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="serveses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_of_serves')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'type_of_serves')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
