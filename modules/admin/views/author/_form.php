<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Author */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="author-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true])->label('Фамилия') ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Имя') ?>

    <?= $form->field($model, 'midname')->textInput(['maxlength' => true])->label('Отчество') ?>

    <?= $form->field($model, 'date_born')->textInput()->label('Дата рождения') ?>

    <?= $form->field($model, 'date_die')->textInput()->label('Дата смерти') ?>

    <!--<?= $form->field($model, 'countbooks')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
