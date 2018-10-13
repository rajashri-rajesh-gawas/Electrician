<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeamsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teams-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fb_link') ?>

    <?= $form->field($model, 'twitter_link') ?>

    <?= $form->field($model, 'google_plus_link') ?>

    <?= $form->field($model, 'image_file') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'designation') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
