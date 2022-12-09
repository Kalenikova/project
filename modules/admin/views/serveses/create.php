<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Serveses */

$this->title = 'Create Serveses';
$this->params['breadcrumbs'][] = ['label' => 'Serveses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serveses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
