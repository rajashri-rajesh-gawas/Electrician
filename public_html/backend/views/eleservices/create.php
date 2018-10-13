<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Eleservices */

$this->title = 'Create Eleservices';
$this->params['breadcrumbs'][] = ['label' => 'Eleservices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eleservices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
