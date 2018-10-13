<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Electrician */

$this->title = 'Create Electrician';
$this->params['breadcrumbs'][] = ['label' => 'Electricians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="electrician-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
