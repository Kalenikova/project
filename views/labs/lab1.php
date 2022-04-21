<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Lab1';
?>
<div class="site-lab1">

    <div class="alert alert-success" role="alert">
        Лабораторная работа №1
    </div>
    <div class="" style="float:left;width:50%;min-width:512;">
    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'name')->label('Имя') ?>
    <?= $form->field($model, 'email')->label('E-mail')->input('email') ?>
    <?= $form->field($model, 'age')->label('Возраст') ?>
    <?= $form->field($model, 'date')->label('Дата посещения')->input('date') ?>
    <?= $form->field($model, 'kitchen')->label('Кухня')->dropDownList([
        'Русская' => 'Русская',
        'Итальянская' => 'Итальянская',
        'Грузинская' => 'Грузинская',
        'Японская' => 'Японская',
        'Тайская' => 'Тайская',
        'Татарская' => 'Татарская',
        'Итальянская' => 'Итальянская'
    ]) ?>
    <?= $form->field($model, 'recomend')->label('Рекомендовали бы друзьям?')->radioList(array('Да' => 'Да', 'Нет' => 'Нет')) ?>
    <?= $form->field($model, 'comment')->label('Текст отзыва')->textarea(['rows' => 6]) ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end() ?>
    </div>
    <?php
        if($model->load(Yii::$app->request->post())){
    ?>
        <div class="col" style="float:right;width:50%;min-width:512;">
            <h3 class="md-0">Переданный отзыв</h3>
            <table class="table table-atriped">
                <tbody>
                    <tr>
                        <th scope="row">Ваше имя</th>
                        <td><?= Html::encode($model->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Ваш E-mail</th>
                        <td><?= Html::encode($model->email) ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Ваш возраст</th>
                        <td><?= Html::encode($model->age) ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Отзыв оставлен</th>
                        <td><?= Html::encode($model->date) ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Любимая кухня</th>
                        <td><?= Html::encode($model->kitchen) ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Рекомендуете друзьям?</th>
                        <td><?= Html::encode($model->recomend) ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Отзыв</th>
                        <td><?= Html::encode($model->comment) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php };?>

</div>