<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Electric */

$this->title = 'Update Electric: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Electrics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="electric-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
