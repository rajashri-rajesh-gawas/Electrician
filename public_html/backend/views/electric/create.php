<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Electric */

$this->title = 'Create Electric';
$this->params['breadcrumbs'][] = ['label' => 'Electrics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="electric-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
